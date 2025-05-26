<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Programador Desarrollador');
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
	require('views/implement/fpdf/fpdf.php');
	header("Content-Type: text/html;charset=utf-8");
	//------------------------------------------------
	class dashboardController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			# Variable convertida en global y ser consultada
			global $router;
			# Detección del controlador actual
			$var_router = $router->getController();
			# Reemplazar la palabra Controller
			$var_controller = str_replace("Controller", "/", $var_router);
			# Deteccion del metodo actual y concatenado del controlador
			$var_url = $var_controller . $this->method . '/';
			# Variable Get para cargar el id
			$_GET['field_id'] = $this->route->getMethod();
			# Instanciando clases del modelo
			$var_m_azp_gsc_phase = new m_azp_gsc_phaseModel;
			# Instanciando clases del modelo
			$var_m_azp_user = new m_azp_userModel;
			# Instanciando clases del modelo
			$var_m_zv_dashboard = new m_zv_dashboardModel;
			# Instanciando clases del modelo
			$var_m_zz_design = new m_zz_designModel;
			# Instanciado funciones de la clase y asignando a variable
			if (false != $df_sql_select_tc_azp_user_role = $var_m_azp_user->sql_select_tc_azp_user_role($var_controller)) {
				# Recorriendo filas de los resultados de la base de datos
				foreach ($df_sql_select_tc_azp_user_role as $key_role):
					# Imprimiendo cada uno de los resultados recorridos de las filas
					$result_permits_role = $key_role[d_azp_user_v_id_azp_role];
				# Final del recorrido
				endforeach;
			}
			# Restricción alfanumérica
			if (null != $this->route->getMethod() and Strings::alphanumeric($this->route->getMethod())) {
				# Hay acceso
				$metodo = $this->route->getMethod();
				switch ($this->method) {
					case 'clientimage':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_client_image();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						if (true == $variable) { foreach ($variable as $key => $value) { $var_count = $value['lbl_count']; } } else { $var_count = 0; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo $var_count;
						# Finalizar el codigo
						exit();
						break;
					case 'cpdit':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Definir valor de variable
							$var_validate = 0;
							$var_pr_observation = array();
							$var_vh_observation = array();
							$var_cm_observation = array();
							$var_fu_observation = array();
							$var_wr_observation = array();
							# Control de valicacion de datos get
							if (isset($_GET['field_identification'])) {
								# Control de valicacion de datos get
								if ($_GET['field_identification'] != '') {
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_sql = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_data_main($_GET['field_identification']);
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $var_sql) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($var_sql as $key => $value) { $var_validate = 1; }
									}
								} else { $var_validate = 0; }
							} else { $var_validate = 0; }
							# Control de valicacion de datos get
							if ($var_validate >= 1) {
								#--------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_dit_data_main = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_data_main($_GET['field_identification']);
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_dit_camera = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_camera($_GET['field_identification']);
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_dit_furniture = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_furniture($_GET['field_identification']);
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_dit_property = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_property($_GET['field_identification']);
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_dit_vehicle = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_vehicle($_GET['field_identification']);
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_dit_warranty = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_warranty($_GET['field_identification']);
								#--------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_rst_data_main = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_data_main($_GET['field_identification']);
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_rst_camera = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_camera($_GET['field_identification']);
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_rst_furniture = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_furniture($_GET['field_identification']);
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_rst_property = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_property($_GET['field_identification']);
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_rst_vehicle = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_vehicle($_GET['field_identification']);
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_rst_warranty = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_warranty($_GET['field_identification']);
								#--------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_cell_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_cell_1();
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_cell_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_cell_2();
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_cell_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_cell_3();
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_cell_1) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_cell_1 as $key => $value) {
										# Imprimir valores recibidos
										$varf_cl_1_al = $value['lbl_azp_ibn_pdf_cell_t_align'];
										$varf_cl_1_bo = $value['lbl_azp_ibn_pdf_cell_t_border'];
										$varf_cl_1_fi = $value['lbl_azp_ibn_pdf_cell_t_fill'];
										$varf_cl_1_he = $value['lbl_azp_ibn_pdf_cell_t_height'];
										$varf_cl_1_li = $value['lbl_azp_ibn_pdf_cell_t_line'];
										$varf_cl_1_lk = $value['lbl_azp_ibn_pdf_cell_t_link'];
										$varf_cl_1_te = $value['lbl_azp_ibn_pdf_cell_t_text'];
										$varf_cl_1_wi = $value['lbl_azp_ibn_pdf_cell_t_width'];
									}
								} else {
									$varf_cl_1_al = ''; $varf_cl_1_bo = ''; $varf_cl_1_fi = ''; $varf_cl_1_he = '';
									$varf_cl_1_li = ''; $varf_cl_1_lk = ''; $varf_cl_1_te = ''; $varf_cl_1_wi = '';
								}
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_cell_2) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_cell_2 as $key => $value) {
										# Imprimir valores recibidos
										$varf_cl_2_al = $value['lbl_azp_ibn_pdf_cell_t_align'];
										$varf_cl_2_bo = $value['lbl_azp_ibn_pdf_cell_t_border'];
										$varf_cl_2_fi = $value['lbl_azp_ibn_pdf_cell_t_fill'];
										$varf_cl_2_he = $value['lbl_azp_ibn_pdf_cell_t_height'];
										$varf_cl_2_li = $value['lbl_azp_ibn_pdf_cell_t_line'];
										$varf_cl_2_lk = $value['lbl_azp_ibn_pdf_cell_t_link'];
										$varf_cl_2_te = $value['lbl_azp_ibn_pdf_cell_t_text'];
										$varf_cl_2_wi = $value['lbl_azp_ibn_pdf_cell_t_width'];
									}
								} else {
									$varf_cl_2_al = ''; $varf_cl_2_bo = ''; $varf_cl_2_fi = ''; $varf_cl_2_he = '';
									$varf_cl_2_li = ''; $varf_cl_2_lk = ''; $varf_cl_2_te = ''; $varf_cl_2_wi = '';
								}
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_cell_3) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_cell_3 as $key => $value) {
										# Imprimir valores recibidos
										$varf_cl_3_al = $value['lbl_azp_ibn_pdf_cell_t_align'];
										$varf_cl_3_bo = $value['lbl_azp_ibn_pdf_cell_t_border'];
										$varf_cl_3_fi = $value['lbl_azp_ibn_pdf_cell_t_fill'];
										$varf_cl_3_he = $value['lbl_azp_ibn_pdf_cell_t_height'];
										$varf_cl_3_li = $value['lbl_azp_ibn_pdf_cell_t_line'];
										$varf_cl_3_lk = $value['lbl_azp_ibn_pdf_cell_t_link'];
										$varf_cl_3_te = $value['lbl_azp_ibn_pdf_cell_t_text'];
										$varf_cl_3_wi = $value['lbl_azp_ibn_pdf_cell_t_width'];
									}
								} else {
									$varf_cl_3_al = ''; $varf_cl_3_bo = ''; $varf_cl_3_fi = ''; $varf_cl_3_he = '';
									$varf_cl_3_li = ''; $varf_cl_3_lk = ''; $varf_cl_3_te = ''; $varf_cl_3_wi = '';
								}
								#--------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_fill_color_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_fill_color_1();
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_fill_color_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_fill_color_2();
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_fill_color_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_fill_color_3();
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_fill_color_1) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_fill_color_1 as $key => $value) {
										# Imprimir valores recibidos
										$varf_fc_1_blue = $value['lbl_azp_ibn_pdf_fill_color_t_blue'];
										$varf_fc_1_green = $value['lbl_azp_ibn_pdf_fill_color_t_green'];
										$varf_fc_1_label = $value['lbl_azp_ibn_pdf_fill_color_t_label'];
										$varf_fc_1_red = $value['lbl_azp_ibn_pdf_fill_color_t_red'];
									}
								} else { $varf_fc_1_blue = ''; $varf_fc_1_green = ''; $varf_fc_1_label = ''; $varf_fc_1_red = ''; }
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_fill_color_2) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_fill_color_2 as $key => $value) {
										# Imprimir valores recibidos
										$varf_fc_2_blue = $value['lbl_azp_ibn_pdf_fill_color_t_blue'];
										$varf_fc_2_green = $value['lbl_azp_ibn_pdf_fill_color_t_green'];
										$varf_fc_2_label = $value['lbl_azp_ibn_pdf_fill_color_t_label'];
										$varf_fc_2_red = $value['lbl_azp_ibn_pdf_fill_color_t_red'];
									}
								} else { $varf_fc_2_blue = ''; $varf_fc_2_green = ''; $varf_fc_2_label = ''; $varf_fc_2_red = ''; }
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_fill_color_3) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_fill_color_3 as $key => $value) {
										# Imprimir valores recibidos
										$varf_fc_3_blue = $value['lbl_azp_ibn_pdf_fill_color_t_blue'];
										$varf_fc_3_green = $value['lbl_azp_ibn_pdf_fill_color_t_green'];
										$varf_fc_3_label = $value['lbl_azp_ibn_pdf_fill_color_t_label'];
										$varf_fc_3_red = $value['lbl_azp_ibn_pdf_fill_color_t_red'];
									}
								} else { $varf_fc_3_blue = ''; $varf_fc_3_green = ''; $varf_fc_3_label = ''; $varf_fc_3_red = ''; }
								#--------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_font_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_font_1();
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_font_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_font_2();
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_font_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_font_3();
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_font_1) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_font_1 as $key => $value) {
										# Imprimir valores recibidos
										$varf_ft_1_family = $value['lbl_azp_ibn_pdf_font_t_family'];
										$varf_ft_1_size = $value['lbl_azp_ibn_pdf_font_t_size'];
										$varf_ft_1_style = str_replace('NINGUNO', '', $value['lbl_azp_ibn_pdf_font_t_style']);
									}
								} else { $varf_ft_1_family = ''; $varf_ft_1_size = ''; $varf_ft_1_style = ''; }
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_font_2) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_font_2 as $key => $value) {
										# Imprimir valores recibidos
										$varf_ft_2_family = $value['lbl_azp_ibn_pdf_font_t_family'];
										$varf_ft_2_size = $value['lbl_azp_ibn_pdf_font_t_size'];
										$varf_ft_2_style = str_replace('NINGUNO', '', $value['lbl_azp_ibn_pdf_font_t_style']);
									}
								} else { $varf_ft_2_family = ''; $varf_ft_2_size = ''; $varf_ft_2_style = ''; }
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_font_3) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_font_3 as $key => $value) {
										# Imprimir valores recibidos
										$varf_ft_3_family = $value['lbl_azp_ibn_pdf_font_t_family'];
										$varf_ft_3_size = $value['lbl_azp_ibn_pdf_font_t_size'];
										$varf_ft_3_style = str_replace('NINGUNO', '', $value['lbl_azp_ibn_pdf_font_t_style']);
									}
								} else { $varf_ft_3_family = ''; $varf_ft_3_size = ''; $varf_ft_3_style = ''; }
								#--------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_text_color_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_text_color_1();
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_text_color_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_text_color_2();
								# Consultar registros de la tabla por medio del modelo instanciado
								$varf_text_color_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_text_color_3();
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_text_color_1) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_text_color_1 as $key => $value) {
										# Imprimir valores recibidos
										$varf_tc_1_blue = $value['lbl_azp_ibn_pdf_text_color_t_blue'];
										$varf_tc_1_green = $value['lbl_azp_ibn_pdf_text_color_t_green'];
										$varf_tc_1_label = $value['lbl_azp_ibn_pdf_text_color_t_label'];
										$varf_tc_1_red = $value['lbl_azp_ibn_pdf_text_color_t_red'];
									}
								} else { $varf_tc_1_blue = ''; $varf_tc_1_green = ''; $varf_tc_1_label = ''; $varf_tc_1_red = ''; }
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_text_color_2) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_text_color_2 as $key => $value) {
										# Imprimir valores recibidos
										$varf_tc_2_blue = $value['lbl_azp_ibn_pdf_text_color_t_blue'];
										$varf_tc_2_green = $value['lbl_azp_ibn_pdf_text_color_t_green'];
										$varf_tc_2_label = $value['lbl_azp_ibn_pdf_text_color_t_label'];
										$varf_tc_2_red = $value['lbl_azp_ibn_pdf_text_color_t_red'];
									}
								} else { $varf_tc_2_blue = ''; $varf_tc_2_green = ''; $varf_tc_2_label = ''; $varf_tc_2_red = ''; }
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $varf_text_color_3) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($varf_text_color_3 as $key => $value) {
										# Imprimir valores recibidos
										$varf_tc_3_blue = $value['lbl_azp_ibn_pdf_text_color_t_blue'];
										$varf_tc_3_green = $value['lbl_azp_ibn_pdf_text_color_t_green'];
										$varf_tc_3_label = $value['lbl_azp_ibn_pdf_text_color_t_label'];
										$varf_tc_3_red = $value['lbl_azp_ibn_pdf_text_color_t_red'];
									}
								} else { $varf_tc_3_blue = ''; $varf_tc_3_green = ''; $varf_tc_3_label = ''; $varf_tc_3_red = ''; }
								#--------------------------------------------------------#
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (true == $var_dit_data_main) {
									# Recorrer los datos de la consulta de la tabla y encodificarlos
									foreach ($var_dit_data_main as $key => $value) {
										# Imprimir valores recibidos
										$var_dm_id = $value['lbl_azp_ibn_data_main_id_azp_ibn_data_main'];
										$var_dm_city = $value['lbl_azp_ibn_data_main_t_city'];
										$var_dm_code = $value['lbl_azp_ibn_data_main_t_code'];
										$var_dm_consecutive = $value['lbl_azp_ibn_data_main_t_consecutive'];
										$var_dm_department = $value['lbl_azp_ibn_data_main_t_department'];
										$var_dm_full_name = $value['lbl_azp_ibn_data_main_t_full_name'];
										$var_dm_identification = $value['lbl_azp_ibn_data_main_t_identification'];
										$var_dm_nro_obligation = $value['lbl_azp_ibn_data_main_t_nro_obligation'];
										$var_dm_control_panel = $value['lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel'];
										$var_cp_date_arrival = $value['lbl_azp_ibn_control_panel_t_date_arrival'];
										$var_cl_document = $value['lbl_azp_ibn_client_w_document'];
										$var_cl_folder = $value['lbl_azp_ibn_client_w_folder'];
										$var_cl_route = str_replace('../', '', $value['lbl_azp_ibn_client_w_route']);
										$var_cl_image = $var_cl_route . $var_cl_folder . $var_cl_document;
									}
								}
								#--------------------------------------------------------#
								$pdf = new FPDF();
								$pdf->AliasNbPages();
								$pdf->AddPage('','','Letter');
								#--------------------------------------------------------#
								$pdf->AddFont('Lemonmilk-Bold', '', 'LEMONMILK-Bold.php');
								$pdf->AddFont('Lemonmilk-BoldItalic', '', 'LEMONMILK-BoldItalic.php');
								$pdf->AddFont('Lemonmilk-Light', '', 'LEMONMILK-Light.php');
								$pdf->AddFont('Lemonmilk-LightItalic', '', 'LEMONMILK-LightItalic.php');
								$pdf->AddFont('Lemonmilk-Medium', '', 'LEMONMILK-Medium.php');
								$pdf->AddFont('Lemonmilk-MediumItalic', '', 'LEMONMILK-MediumItalic.php');
								$pdf->AddFont('Lemonmilk-Regular', '', 'LEMONMILK-Regular.php');
								$pdf->AddFont('Lemonmilk-RegularItalic', '', 'LEMONMILK-RegularItalic.php');
								#--------------------------------------------------------#
								$pdf->Ln(5);
								#--------------------------------------------------------#
								# Interfaz DIT: Titulo General
								$pdf->SetFont($varf_ft_1_family, $varf_ft_1_style, 14);
								$pdf->SetFillColor($varf_fc_1_red, $varf_fc_1_green, $varf_fc_1_blue);
								$pdf->SetTextColor($varf_tc_1_red, $varf_tc_1_green, $varf_tc_1_blue);
								$pdf->Cell(75, 5, utf8_decode('D.I.T.'), $varf_cl_1_bo, $varf_cl_1_li, $varf_cl_1_al, $varf_cl_1_fi, $varf_cl_1_lk);
								#--------------------------------------------------------#
								$pdf->Ln(5);
								#--------------------------------------------------------#
								# Interfaz DIT: Titulo General
								$pdf->SetFont($varf_ft_1_family, $varf_ft_1_style, $varf_ft_1_size);
								$pdf->SetFillColor($varf_fc_1_red, $varf_fc_1_green, $varf_fc_1_blue);
								$pdf->SetTextColor($varf_tc_1_red, $varf_tc_1_green, $varf_tc_1_blue);
								$pdf->Cell(75, 5, utf8_decode('DIAGNOSTICO INTEGRAL POR TITULAR'), $varf_cl_1_bo, $varf_cl_1_li, $varf_cl_1_al, $varf_cl_1_fi, $varf_cl_1_lk);
								#--------------------------------------------------------#
								$pdf->Ln(5);
								#--------------------------------------------------------#
								# Interfaz DIT: Titulo General
								$pdf->SetFont($varf_ft_1_family, $varf_ft_1_style, $varf_ft_1_size);
								$pdf->SetFillColor($varf_fc_1_red, $varf_fc_1_green, $varf_fc_1_blue);
								$pdf->SetTextColor($varf_tc_1_red, $varf_tc_1_green, $varf_tc_1_blue);
								$pdf->Cell(75, 5, utf8_decode('INVESTIGACION DE BIENES'), $varf_cl_1_bo, $varf_cl_1_li, $varf_cl_1_al, $varf_cl_1_fi, $varf_cl_1_lk);
								#--------------------------------------------------------#
								$pdf->Image($var_cl_image, 90, 12, 50);
								$pdf->Image('views/backend/images/logo.png', 150, 8, 50);
								#--------------------------------------------------------#
								$pdf->Ln(12);
								#--------------------------------------------------------#
								# Interfaz DIT: Campos Textos
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(38, 5, utf8_decode('Entidad Externa Investigadora'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								$pdf->Cell(44, 5, utf8_decode('GSC OUTSOURCING S.A.S'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								#--------------------------------------------------------#
								# Interfaz DIT: Campos Textos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(25, 5, utf8_decode('FECHA'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								$pdf->Cell(30, 5, $var_cp_date_arrival, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								#--------------------------------------------------------#
								# Interfaz DIT: Campos Textos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(25, 5, utf8_decode('CIUDAD'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								$pdf->Cell(28, 5, utf8_decode('BOGOTA'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								#--------------------------------------------------------#
								$pdf->Ln(6);
								#--------------------------------------------------------#
								# Interfaz DIT: Sub Titulos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
								$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
								$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
								$pdf->Cell(190, 5,utf8_decode( 'INFORMACIÓN PERSONAL'), $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
								#--------------------------------------------------------#
								$pdf->SetTextColor(0, 0, 0);
								$pdf->Ln(6);
								#--------------------------------------------------------#
								# Interfaz DIT: Campos Textos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(25, 5, utf8_decode('NOMBRE'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(85, 5, $var_dm_full_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								#--------------------------------------------------------#
								# Interfaz DIT: Campos Textos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(30, 5, utf8_decode('IDENTIFICACION'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(50, 5, $var_dm_identification, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								#--------------------------------------------------------#
								$pdf->Ln(5);
								#--------------------------------------------------------#
								# Interfaz DIT: Campos Textos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(25, 5, utf8_decode('NRO OBLIGACION'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(45, 5, $var_dm_nro_obligation, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								#--------------------------------------------------------#
								# Interfaz DIT: Campos Textos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(25, 5, utf8_decode('CONSECUTIVO'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(25, 5, $var_dm_consecutive, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								#--------------------------------------------------------#
								# Interfaz DIT: Campos Textos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(25, 5, utf8_decode('CIUDAD'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(45, 5, $var_dm_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								#--------------------------------------------------------#
								$pdf->Ln(6);
								#--------------------------------------------------------#
								# Interfaz DIT: Sub Titulos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
								$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
								$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
								$pdf->Cell(190, 5, utf8_decode('INVESTIGACION POR ACTIVIDAD ECONOMICA'), $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
								#--------------------------------------------------------#
								$pdf->SetTextColor(0, 0, 0);
								#--------------------------------------------------------#
								# Recorrer datos para validar si existe
								$var_result_furniture = $var_rst_furniture->fetchAll();
								$var_rst_furniture->closeCursor();
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (false != $var_result_furniture) {
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $var_dit_furniture) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($var_dit_furniture as $key => $value) {
											# Imprimir valores recibidos
											$var_fu_id = utf8_decode($value['lbl_azp_ibn_furniture_id_azp_ibn_furniture']);
											$var_fu_address = utf8_decode($value['lbl_azp_ibn_furniture_t_address']);
											$var_fu_business_name = utf8_decode($value['lbl_azp_ibn_furniture_t_business_name']);
											$var_fu_city = utf8_decode($value['lbl_azp_ibn_furniture_t_city']);
											$var_fu_consecutive = utf8_decode($value['lbl_azp_ibn_furniture_t_consecutive']);
											$var_fu_department = utf8_decode($value['lbl_azp_ibn_furniture_t_department']);
											$var_fu_entity = utf8_decode($value['lbl_azp_ibn_furniture_t_entity']);
											$var_fu_full_name = utf8_decode($value['lbl_azp_ibn_furniture_t_full_name']);
											$var_fu_identification = utf8_decode($value['lbl_azp_ibn_furniture_t_identification']);
											$var_fu_municipality = utf8_decode($value['lbl_azp_ibn_furniture_t_municipality']);
											$var_fu_nit = utf8_decode($value['lbl_azp_ibn_furniture_t_nit']);
											$var_fu_observation[$var_fu_id] = utf8_decode($value['lbl_azp_ibn_furniture_t_concept']);
											$var_fu_phone = utf8_decode($value['lbl_azp_ibn_furniture_t_phone']);
											//$var_fu_salary = utf8_decode($value['lbl_azp_ibn_furniture_t_salary']);
											$var_fu_salary = utf8_decode($value['lbl_azp_ibn_rank_t_name']);
											$var_fu_viable_causal = utf8_decode($value['lbl_azp_ibn_furniture_t_viable_causal']);
											$var_fu_well_option = utf8_decode($value['lbl_azp_ibn_furniture_t_well_option']);
											$var_fu_well_viable = utf8_decode($value['lbl_azp_ibn_furniture_t_well_viable']);
											$var_fu_type_contributor = utf8_decode($value['lbl_azp_ibn_type_contributor_t_name']);
											#--------------------------------------------------------#
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'NIT', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(45, 5, $var_fu_nit, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'ORGANIZACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(40, 5, $var_fu_business_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'CIUDAD', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(45, 5, $var_fu_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'DEPARTAMENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(45, 5, $var_fu_department, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'MUNICIPIO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(40, 5, $var_fu_municipality, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'DIRECCION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(45, 5, $var_fu_address, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'TELEFONO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(45, 5, $var_fu_phone, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'SALARIO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(40, 5, $var_fu_salary, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'TIPO DE COTIZANTE', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(45, 5, $var_fu_type_contributor, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#--------------------------------------------------------#
										}
									} else {
										$pdf->Ln(6);
										#------------------------------#
										# Interfaz DIT: Campos Textos
										#------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICO ACTIVIDAD LABORAL RELACIONADA AL TITULAR',
											$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									}
								} else {
									$pdf->Ln(6);
									#------------------------------#
									# Interfaz DIT: Campos Textos
									#------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICO ACTIVIDAD LABORAL RELACIONADA AL TITULAR',
										$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								}
								#--------------------------------------------------------#
								$pdf->Ln(6);
								#--------------------------------------------------------#
								# Interfaz DIT: Sub Titulos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
								$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
								$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
								$pdf->Cell(190, 5, 'INVESTIGACION POR INMUEBLE', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
								#--------------------------------------------------------#
								$pdf->SetTextColor(0, 0, 0);
								#--------------------------------------------------------#
								# Recorrer datos para validar si existe
								$var_result_property = $var_rst_property->fetchAll();
								$var_rst_property->closeCursor();
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (false != $var_result_property) {
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $var_dit_property) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($var_dit_property as $key => $value) {
											# Imprimir valores recibidos
											$var_pr_id = utf8_decode($value['lbl_azp_ibn_property_id_azp_ibn_property']);
											$var_pr_address = utf8_decode($value['lbl_azp_ibn_property_t_address']);
											$var_pr_area = utf8_decode($value['lbl_azp_ibn_property_t_area']);
											$var_pr_assessment = utf8_decode($value['lbl_azp_ibn_property_t_assessment']);
											$var_pr_causal_feasibility = utf8_decode($value['lbl_azp_ibn_property_t_causal_feasibility']);
											$var_pr_consecutive = utf8_decode($value['lbl_azp_ibn_property_t_consecutive']);
											$var_pr_department = utf8_decode($value['lbl_azp_ibn_property_t_department']);
											$var_pr_full_name = utf8_decode($value['lbl_azp_ibn_property_t_full_name']);
											$var_pr_identification = utf8_decode($value['lbl_azp_ibn_property_t_identification']);
											$var_pr_market_value = utf8_decode($value['lbl_azp_ibn_property_t_market_value']);
											$var_pr_municipality = utf8_decode($value['lbl_azp_ibn_property_t_municipality']);
											$var_pr_nro_registration = utf8_decode($value['lbl_azp_ibn_property_t_nro_registration']);
											$var_pr_observation[$var_pr_id] = utf8_decode($value['lbl_azp_ibn_property_t_concept']);
											$var_pr_ownership = utf8_decode($value['lbl_azp_ibn_property_t_ownership']);
											$var_pr_purchase_annotation = utf8_decode($value['lbl_azp_ibn_property_t_purchase_annotation']);
											$var_pr_viable = utf8_decode($value['lbl_azp_ibn_property_t_viable']);
											$var_pr_well_viable = utf8_decode($value['lbl_azp_ibn_property_t_well_viable']);
											#--------------------------------------------------------#
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(25, 15, 'INMUEBLE ', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'CIUDAD', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(55, 5, $var_pr_municipality, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'DIRECCION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(70, 5, $var_pr_address, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											$pdf->SetX(35);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'DEPARTAMENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(60, 5, $var_pr_department, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'MATRICULA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(65, 5, $var_pr_nro_registration, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											$pdf->SetX(35);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'LIMITACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(145, 5, $var_pr_assessment, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#--------------------------------------------------------#
										}
									} else {
										$pdf->Ln(6);
										#------------------------------#
										# Interfaz DIT: Campos Textos
										#------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON BIENES INMUEBLES A NOMBRE DEL TITULAR',
											$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									}
								} else {
									$pdf->Ln(6);
									#------------------------------#
									# Interfaz DIT: Campos Textos
									#------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON BIENES INMUEBLES A NOMBRE DEL TITULAR',
										$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								}
								#--------------------------------------------------------#
								$pdf->Ln(6);
								#--------------------------------------------------------#
								# Interfaz DIT: Sub Titulos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
								$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
								$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
								$pdf->Cell(190, 5, 'INVESTIGACION POR VEHICULO', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
								#--------------------------------------------------------#
								$pdf->SetTextColor(0, 0, 0);
								#--------------------------------------------------------#
								# Recorrer datos para validar si existe
								$var_result_vehicle = $var_rst_vehicle->fetchAll();
								$var_rst_vehicle->closeCursor();
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (false != $var_result_vehicle) {
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $var_dit_vehicle) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($var_dit_vehicle as $key => $value) {
											# Imprimir valores recibidos
											$var_vh_id = utf8_decode($value['lbl_azp_ibn_vehicle_id_azp_ibn_vehicle']);
											$var_vh_assessment = utf8_decode($value['lbl_azp_ibn_vehicle_t_assessment']);
											$var_vh_causal_feasibility = utf8_decode($value['lbl_azp_ibn_vehicle_t_causal_feasibility']);
											$var_vh_city = utf8_decode($value['lbl_azp_ibn_vehicle_t_city']);
											$var_vh_class = utf8_decode($value['lbl_azp_ibn_vehicle_t_class']);
											$var_vh_color = utf8_decode($value['lbl_azp_ibn_vehicle_t_color']);
											$var_vh_consecutive = utf8_decode($value['lbl_azp_ibn_vehicle_t_consecutive']);
											$var_vh_full_name = utf8_decode($value['lbl_azp_ibn_vehicle_t_full_name']);
											$var_vh_identification = utf8_decode($value['lbl_azp_ibn_vehicle_t_identification']);
											$var_vh_line = utf8_decode($value['lbl_azp_ibn_vehicle_t_line']);
											$var_vh_make_camera = utf8_decode($value['lbl_azp_ibn_vehicle_t_make_camera']);
											$var_vh_mark = utf8_decode($value['lbl_azp_ibn_vehicle_t_mark']);
											$var_vh_model = utf8_decode($value['lbl_azp_ibn_vehicle_t_model']);
											$var_vh_observation[$var_vh_id] = utf8_decode($value['lbl_azp_ibn_vehicle_t_concept']);
											$var_vh_plaque = utf8_decode($value['lbl_azp_ibn_vehicle_t_plaque']);
											$var_vh_service = utf8_decode($value['lbl_azp_ibn_vehicle_t_service']);
											$var_vh_value_assessment = utf8_decode($value['lbl_azp_ibn_vehicle_t_value_assessment']);
											$var_vh_value_vehicle = utf8_decode($value['lbl_azp_ibn_vehicle_t_value_vehicle']);
											$var_vh_viable = utf8_decode($value['lbl_azp_ibn_vehicle_t_viable']);
											$var_vh_well_viable = utf8_decode($value['lbl_azp_ibn_vehicle_t_well_viable']);
											#--------------------------------------------------------#
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(25, 15, 'VEHICULO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'MARCA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(55, 5, $var_vh_mark, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'MODELO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(70, 5, $var_vh_model, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											$pdf->SetX(35);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(13, 5, 'PLACA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(41, 5, $var_vh_plaque, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(13, 5, 'CLASE', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(41, 5, $var_vh_class, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(14, 5, 'UBICACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(43, 5, $var_vh_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											$pdf->SetX(35);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'LIMITACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(145, 5, $var_vh_assessment, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#--------------------------------------------------------#
										}
									} else {
										$pdf->Ln(6);
										#------------------------------#
										# Interfaz DIT: Campos Textos
										#------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON VEHICULOS A NOMBRE DEL TITULAR',
											$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									}
								} else {
									$pdf->Ln(6);
									#------------------------------#
									# Interfaz DIT: Campos Textos
									#------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON VEHICULOS A NOMBRE DEL TITULAR',
										$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								}
								#--------------------------------------------------------#
								$pdf->Ln(6);
								#--------------------------------------------------------#
								# Interfaz DIT: Sub Titulos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
								$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
								$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
								$pdf->Cell(190, 5, 'INVESTIGACION POR ESTABLECIMIENTO DE COMERCIO', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
								#--------------------------------------------------------#
								$pdf->SetTextColor(0, 0, 0);
								#--------------------------------------------------------#
								# Recorrer datos para validar si existe
								$var_result_camera = $var_rst_camera->fetchAll();
								$var_rst_camera->closeCursor();
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (false != $var_result_camera) {
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $var_dit_camera) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($var_dit_camera as $key => $value) {
											# Imprimir valores recibidos
											$var_cm_id = utf8_decode($value['lbl_azp_ibn_camera_id_azp_ibn_camera']);
											$var_cm_act_economic = utf8_decode($value['lbl_azp_ibn_camera_t_act_economic']);
											$var_cm_address = utf8_decode($value['lbl_azp_ibn_camera_t_address']);
											$var_cm_assessment = utf8_decode($value['lbl_azp_ibn_camera_t_assessment']);
											$var_cm_business_name = utf8_decode($value['lbl_azp_ibn_camera_t_business_name']);
											$var_cm_causal_feasibility = utf8_decode($value['lbl_azp_ibn_camera_t_causal_feasibility']);
											$var_cm_city = utf8_decode($value['lbl_azp_ibn_camera_t_city']);
											$var_cm_consecutive = utf8_decode($value['lbl_azp_ibn_camera_t_consecutive']);
											$var_cm_department = utf8_decode($value['lbl_azp_ibn_camera_t_department']);
											$var_cm_establishment = utf8_decode($value['lbl_azp_ibn_camera_t_establishment']);
											$var_cm_full_name = utf8_decode($value['lbl_azp_ibn_camera_t_full_name']);
											$var_cm_identification = utf8_decode($value['lbl_azp_ibn_camera_t_identification']);
											$var_cm_legal_representative = utf8_decode($value['lbl_azp_ibn_camera_t_legal_representative']);
											$var_cm_legal_rp_certificate = utf8_decode($value['lbl_azp_ibn_camera_t_legal_rp_certificate']);
											$var_cm_municipality = utf8_decode($value['lbl_azp_ibn_camera_t_municipality']);
											$var_cm_nit = utf8_decode($value['lbl_azp_ibn_camera_t_nit']);
											$var_cm_nro_registration = utf8_decode($value['lbl_azp_ibn_camera_t_nro_registration']);
											$var_cm_observation[$var_cm_id] = utf8_decode($value['lbl_azp_ibn_camera_t_concept']);
											$var_cm_phone = utf8_decode($value['lbl_azp_ibn_camera_t_phone']);
											$var_cm_renewal_date = utf8_decode($value['lbl_azp_ibn_camera_t_renewal_date']);
											$var_cm_rup = utf8_decode($value['lbl_azp_ibn_camera_t_rup']);
											$var_cm_total_active = utf8_decode($value['lbl_azp_ibn_camera_t_total_active']);
											$var_cm_type_company = utf8_decode($value['lbl_azp_ibn_camera_t_type_company']);
											$var_cm_type_organization = utf8_decode($value['lbl_azp_ibn_camera_t_type_organization']);
											$var_cm_viable = utf8_decode($value['lbl_azp_ibn_camera_t_viable']);
											$var_cm_well_viable = utf8_decode($value['lbl_azp_ibn_camera_t_well_viable']);
											$var_cm_year = utf8_decode($value['lbl_azp_ibn_camera_t_year']);
											#--------------------------------------------------------#
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'RAZON SOCIAL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(75, 5, $var_cm_business_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'NIT', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(75, 5, $var_cm_nit, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'ESTABLECIMIENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(170, 5, $var_cm_establishment, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'TELEFONO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(45, 5, $var_cm_phone, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'CIUDAD', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(40, 5, $var_cm_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'DEPARTAMENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(45, 5, $var_cm_department, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(30, 5, 'MATRICULA MERCANTIL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(65, 5, $var_cm_nro_registration, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'ADICIONALES', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(75, 5, '', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(25, 5, 'CEDULA REPR LEGAL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(70, 5, $var_cm_legal_rp_certificate, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(25, 5, 'NOMBRE REPR LEGAL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(70, 5, $var_cm_legal_representative, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'TIPO ORGANIZACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(45, 5, $var_cm_type_organization, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'FECHA RENOVACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(40, 5, $var_cm_renewal_date, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'RUP', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(45, 5, $var_cm_rup, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#--------------------------------------------------------#
										}
									} else {
										$pdf->Ln(6);
										#------------------------------#
										# Interfaz DIT: Campos Textos
										#------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON CAMARAS A NOMBRE DEL TITULAR',
											$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									}
								} else {
									$pdf->Ln(6);
									#------------------------------#
									# Interfaz DIT: Campos Textos
									#------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON CAMARAS A NOMBRE DEL TITULAR',
										$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								}
								#--------------------------------------------------------#
								$pdf->Ln(6);
								#--------------------------------------------------------#
								# Interfaz DIT: Sub Titulos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
								$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
								$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
								$pdf->Cell(190, 5, 'INVESTIGACION POR GARANTIAS MOBILIARIAS', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
								#--------------------------------------------------------#
								$pdf->SetTextColor(0, 0, 0);
								#--------------------------------------------------------#
								# Recorrer datos para validar si existe
								$var_result_warranty = $var_rst_warranty->fetchAll();
								$var_rst_warranty->closeCursor();
								# Validar si la sentencia query ejecutada es correcta y no falsa
								if (false != $var_result_warranty) {
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $var_dit_warranty) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($var_dit_warranty as $key => $value) {
											# Imprimir valores recibidos
											$var_wr_id = utf8_decode($value['lbl_azp_ibn_warranty_id_azp_ibn_warranty']);
											$var_wr_consecutive = utf8_decode($value['lbl_azp_ibn_warranty_t_consecutive']);
											$var_wr_creditor = utf8_decode($value['lbl_azp_ibn_warranty_t_creditor']);
											$var_wr_date = utf8_decode($value['lbl_azp_ibn_warranty_t_date']);
											$var_wr_full_name = utf8_decode($value['lbl_azp_ibn_warranty_t_full_name']);
											$var_wr_identification = utf8_decode($value['lbl_azp_ibn_warranty_t_identification']);
											$var_wr_observation[$var_wr_id] = utf8_decode($value['lbl_azp_ibn_warranty_t_concept']);
											$var_wr_well_detail = utf8_decode($value['lbl_azp_ibn_warranty_t_well_detail']);
											$var_wr_well_name = utf8_decode($value['lbl_azp_ibn_warranty_t_well_name']);
											$var_wr_value = utf8_decode($value['lbl_azp_ibn_warranty_t_value']);
											#--------------------------------------------------------#
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'ACREEDOR', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(75, 5, $var_wr_creditor, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'VALOR', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(75, 5, $var_wr_value, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											$pdf->Ln(5);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'BIEN', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(75, 5, $var_wr_well_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(20, 5, 'FECHA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(75, 5, $var_wr_date, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											#------------------------------#
										}
									} else {
										$pdf->Ln(6);
										#------------------------------#
										# Interfaz DIT: Campos Textos
										#------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON GARANTIAS MOBILIARIAS A NOMBRE DEL TITULAR',
											$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									}
								} else {
									$pdf->Ln(6);
									#------------------------------#
									# Interfaz DIT: Campos Textos
									#------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON GARANTIAS MOBILIARIAS A NOMBRE DEL TITULAR',
										$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								}
								#--------------------------------------------------------#
								$pdf->Ln(6);
								#--------------------------------------------------------#
								# Interfaz DIT: Sub Titulos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
								$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
								$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
								$pdf->Cell(190, 5, 'DIT: DIAGNOSTICO INTEGRAL POR TITULAR', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
								#--------------------------------------------------------#
								$pdf->SetTextColor(0, 0, 0);
								$pdf->Ln(6);
								#--------------------------------------------------------#
								$empty_pr_observation = implode(',', $var_pr_observation);
								$empty_vh_observation = implode(',', $var_vh_observation);
								$empty_cm_observation = implode(',', $var_cm_observation);
								$empty_fu_observation = implode(',', $var_fu_observation);
								$empty_wr_observation = implode(',', $var_wr_observation);
								#--------------------------------------------------------#
								# Interfaz DIT: Campos Textos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->MultiCell(190, 4, 'INMUEBLE: ' . $empty_pr_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
								$pdf->MultiCell(190, 4, 'VEHICULOS: ' . $empty_vh_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
								$pdf->MultiCell(190, 4, 'CAMARA DE COMERCIO:' . $empty_cm_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
								$pdf->MultiCell(190, 4, 'SALARIO:' . $empty_fu_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
								$pdf->MultiCell(190, 4, 'GARANTIAS MOBILIARIAS:' . $empty_wr_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
								#--------------------------------------------------------#
								$pdf->Ln(2);
								#--------------------------------------------------------#
								# Interfaz DIT: Campos Textos
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(70, 5, 'VIABILIDAD PARA JUDICIALIZAR ', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								#--------------------------------------------------------#
								$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
								$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
								$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
								$pdf->Cell(120, 5, '', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
								#--------------------------------------------------------#
								$pdf->Ln(6);
								#--------------------------------------------------------#
								$pdf->Image('views/backend/images/firm.png');
								#--------------------------------------------------------#
								$pdf->Ln(3);
								#--------------------------------------------------------#
								$pdf->SetFont('Arial', 'B', 7);
								$pdf->Cell(190, 5, 'MARGARITA GIRALDO DE SANCHEZ', 0, 0,);
								#--------------------------------------------------------#
								$pdf->Ln(3);
								#--------------------------------------------------------#
								$pdf->SetFont('Arial', 'B', 7);
								$pdf->Cell(190, 5, 'DIRECTORA PROCESOS', 0, 0,);
								#--------------------------------------------------------#
								$pdf->Ln(3);
								#--------------------------------------------------------#
								$pdf->SetFont('Arial', 'B', 7);
								$pdf->Cell(190, 5, 'REVISION GSC OUTSOURCING S.A.S.', 0, 0,);
								#--------------------------------------------------------#
								$pdf->Output();
								//$pdf->Output('F', 'systemfiles/filesdownload/' . DATE_NUMBER . ' ' . HOUR_NUMBER . '.pdf', true);
							}
						}
						break;
					case 'dwdit':
						if (isset($_GET['field_data'])) { $var_idd = $_GET['field_data']; } else { $var_idd = 0; }
						# Consultar helper y sus opciones
						Helper::load('files');
						# Ruta de la carpeta con cedulas
						$var_rout_rm = 'systemfiles/filesproject/azp_ibn_control_panel/' . $var_idd . '/archive/';
						# Creacion de carpetas en el desarrollo
						Files::rm_dir($var_rout_rm);
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Definir valor de variable
							$var_validate = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_dit_data_main = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_data_group();
							#--------------------------------------------------------#
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (true == $var_dit_data_main) {
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($var_dit_data_main as $key => $value) {
									$var_pr_observation = array();
									$var_vh_observation = array();
									$var_cm_observation = array();
									$var_fu_observation = array();
									$var_wr_observation = array();
									# Imprimir valores recibidos
									$var_dm_id = $value['lbl_azp_ibn_data_main_id_azp_ibn_data_main'];
									$var_dm_city = $value['lbl_azp_ibn_data_main_t_city'];
									$var_dm_code = $value['lbl_azp_ibn_data_main_t_code'];
									$var_dm_consecutive = $value['lbl_azp_ibn_data_main_t_consecutive'];
									$var_dm_department = $value['lbl_azp_ibn_data_main_t_department'];
									$var_dm_full_name = $value['lbl_azp_ibn_data_main_t_full_name'];
									$var_dm_identification = $value['lbl_azp_ibn_data_main_t_identification'];
									$var_dm_nro_obligation = $value['lbl_azp_ibn_data_main_t_nro_obligation'];
									$var_dm_control_panel = $value['lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel'];
									$var_cp_date_arrival = $value['lbl_azp_ibn_control_panel_t_date_arrival'];
									$var_cl_document = $value['lbl_azp_ibn_client_w_document'];
									$var_cl_folder = $value['lbl_azp_ibn_client_w_folder'];
									$var_cl_route = str_replace('../', '', $value['lbl_azp_ibn_client_w_route']);
									$var_cl_image = $var_cl_route . $var_cl_folder . $var_cl_document;
									#--------------------------------------------------------#
									# Ruta de la carpeta con cedulas
									$var_route = 'systemfiles/filesproject/azp_ibn_control_panel/' . $var_dm_control_panel . '/' . $var_dm_identification . '/';
									# Consultar helper y sus opciones
									Helper::load('files');
									# Creacion de carpetas en el desarrollo
									Files::create_dir($var_route, 0777);
									# Dar permisos a la carpeta y archivo
									chmod($var_route, 0777);
									#--------------------------------------------------------#
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_dit_camera = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_camera($var_dm_identification);
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_dit_furniture = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_furniture($var_dm_identification);
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_dit_property = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_property($var_dm_identification);
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_dit_vehicle = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_vehicle($var_dm_identification);
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_dit_warranty = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_warranty($var_dm_identification);
									#--------------------------------------------------------#
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_rst_data_main = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_data_group();
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_rst_camera = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_camera($var_dm_identification);
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_rst_furniture = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_furniture($var_dm_identification);
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_rst_property = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_property($var_dm_identification);
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_rst_vehicle = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_vehicle($var_dm_identification);
									# Consultar registros de la tabla por medio del modelo instanciado
									$var_rst_warranty = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_warranty($var_dm_identification);
									#--------------------------------------------------------#
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_cell_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_cell_1();
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_cell_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_cell_2();
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_cell_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_cell_3();
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_cell_1) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_cell_1 as $key => $value) {
											# Imprimir valores recibidos
											$varf_cl_1_al = $value['lbl_azp_ibn_pdf_cell_t_align'];
											$varf_cl_1_bo = $value['lbl_azp_ibn_pdf_cell_t_border'];
											$varf_cl_1_fi = $value['lbl_azp_ibn_pdf_cell_t_fill'];
											$varf_cl_1_he = $value['lbl_azp_ibn_pdf_cell_t_height'];
											$varf_cl_1_li = $value['lbl_azp_ibn_pdf_cell_t_line'];
											$varf_cl_1_lk = $value['lbl_azp_ibn_pdf_cell_t_link'];
											$varf_cl_1_te = $value['lbl_azp_ibn_pdf_cell_t_text'];
											$varf_cl_1_wi = $value['lbl_azp_ibn_pdf_cell_t_width'];
										}
									} else {
										$varf_cl_1_al = ''; $varf_cl_1_bo = ''; $varf_cl_1_fi = ''; $varf_cl_1_he = '';
										$varf_cl_1_li = ''; $varf_cl_1_lk = ''; $varf_cl_1_te = ''; $varf_cl_1_wi = '';
									}
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_cell_2) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_cell_2 as $key => $value) {
											# Imprimir valores recibidos
											$varf_cl_2_al = $value['lbl_azp_ibn_pdf_cell_t_align'];
											$varf_cl_2_bo = $value['lbl_azp_ibn_pdf_cell_t_border'];
											$varf_cl_2_fi = $value['lbl_azp_ibn_pdf_cell_t_fill'];
											$varf_cl_2_he = $value['lbl_azp_ibn_pdf_cell_t_height'];
											$varf_cl_2_li = $value['lbl_azp_ibn_pdf_cell_t_line'];
											$varf_cl_2_lk = $value['lbl_azp_ibn_pdf_cell_t_link'];
											$varf_cl_2_te = $value['lbl_azp_ibn_pdf_cell_t_text'];
											$varf_cl_2_wi = $value['lbl_azp_ibn_pdf_cell_t_width'];
										}
									} else {
										$varf_cl_2_al = ''; $varf_cl_2_bo = ''; $varf_cl_2_fi = ''; $varf_cl_2_he = '';
										$varf_cl_2_li = ''; $varf_cl_2_lk = ''; $varf_cl_2_te = ''; $varf_cl_2_wi = '';
									}
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_cell_3) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_cell_3 as $key => $value) {
											# Imprimir valores recibidos
											$varf_cl_3_al = $value['lbl_azp_ibn_pdf_cell_t_align'];
											$varf_cl_3_bo = $value['lbl_azp_ibn_pdf_cell_t_border'];
											$varf_cl_3_fi = $value['lbl_azp_ibn_pdf_cell_t_fill'];
											$varf_cl_3_he = $value['lbl_azp_ibn_pdf_cell_t_height'];
											$varf_cl_3_li = $value['lbl_azp_ibn_pdf_cell_t_line'];
											$varf_cl_3_lk = $value['lbl_azp_ibn_pdf_cell_t_link'];
											$varf_cl_3_te = $value['lbl_azp_ibn_pdf_cell_t_text'];
											$varf_cl_3_wi = $value['lbl_azp_ibn_pdf_cell_t_width'];
										}
									} else {
										$varf_cl_3_al = ''; $varf_cl_3_bo = ''; $varf_cl_3_fi = ''; $varf_cl_3_he = '';
										$varf_cl_3_li = ''; $varf_cl_3_lk = ''; $varf_cl_3_te = ''; $varf_cl_3_wi = '';
									}
									#--------------------------------------------------------#
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_fill_color_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_fill_color_1();
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_fill_color_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_fill_color_2();
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_fill_color_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_fill_color_3();
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_fill_color_1) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_fill_color_1 as $key => $value) {
											# Imprimir valores recibidos
											$varf_fc_1_blue = $value['lbl_azp_ibn_pdf_fill_color_t_blue'];
											$varf_fc_1_green = $value['lbl_azp_ibn_pdf_fill_color_t_green'];
											$varf_fc_1_label = $value['lbl_azp_ibn_pdf_fill_color_t_label'];
											$varf_fc_1_red = $value['lbl_azp_ibn_pdf_fill_color_t_red'];
										}
									} else { $varf_fc_1_blue = ''; $varf_fc_1_green = ''; $varf_fc_1_label = ''; $varf_fc_1_red = ''; }
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_fill_color_2) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_fill_color_2 as $key => $value) {
											# Imprimir valores recibidos
											$varf_fc_2_blue = $value['lbl_azp_ibn_pdf_fill_color_t_blue'];
											$varf_fc_2_green = $value['lbl_azp_ibn_pdf_fill_color_t_green'];
											$varf_fc_2_label = $value['lbl_azp_ibn_pdf_fill_color_t_label'];
											$varf_fc_2_red = $value['lbl_azp_ibn_pdf_fill_color_t_red'];
										}
									} else { $varf_fc_2_blue = ''; $varf_fc_2_green = ''; $varf_fc_2_label = ''; $varf_fc_2_red = ''; }
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_fill_color_3) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_fill_color_3 as $key => $value) {
											# Imprimir valores recibidos
											$varf_fc_3_blue = $value['lbl_azp_ibn_pdf_fill_color_t_blue'];
											$varf_fc_3_green = $value['lbl_azp_ibn_pdf_fill_color_t_green'];
											$varf_fc_3_label = $value['lbl_azp_ibn_pdf_fill_color_t_label'];
											$varf_fc_3_red = $value['lbl_azp_ibn_pdf_fill_color_t_red'];
										}
									} else { $varf_fc_3_blue = ''; $varf_fc_3_green = ''; $varf_fc_3_label = ''; $varf_fc_3_red = ''; }
									#--------------------------------------------------------#
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_font_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_font_1();
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_font_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_font_2();
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_font_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_font_3();
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_font_1) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_font_1 as $key => $value) {
											# Imprimir valores recibidos
											$varf_ft_1_family = $value['lbl_azp_ibn_pdf_font_t_family'];
											$varf_ft_1_size = $value['lbl_azp_ibn_pdf_font_t_size'];
											$varf_ft_1_style = str_replace('NINGUNO', '', $value['lbl_azp_ibn_pdf_font_t_style']);
										}
									} else { $varf_ft_1_family = ''; $varf_ft_1_size = ''; $varf_ft_1_style = ''; }
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_font_2) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_font_2 as $key => $value) {
											# Imprimir valores recibidos
											$varf_ft_2_family = $value['lbl_azp_ibn_pdf_font_t_family'];
											$varf_ft_2_size = $value['lbl_azp_ibn_pdf_font_t_size'];
											$varf_ft_2_style = str_replace('NINGUNO', '', $value['lbl_azp_ibn_pdf_font_t_style']);
										}
									} else { $varf_ft_2_family = ''; $varf_ft_2_size = ''; $varf_ft_2_style = ''; }
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_font_3) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_font_3 as $key => $value) {
											# Imprimir valores recibidos
											$varf_ft_3_family = $value['lbl_azp_ibn_pdf_font_t_family'];
											$varf_ft_3_size = $value['lbl_azp_ibn_pdf_font_t_size'];
											$varf_ft_3_style = str_replace('NINGUNO', '', $value['lbl_azp_ibn_pdf_font_t_style']);
										}
									} else { $varf_ft_3_family = ''; $varf_ft_3_size = ''; $varf_ft_3_style = ''; }
									#--------------------------------------------------------#
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_text_color_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_text_color_1();
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_text_color_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_text_color_2();
									# Consultar registros de la tabla por medio del modelo instanciado
									$varf_text_color_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_text_color_3();
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_text_color_1) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_text_color_1 as $key => $value) {
											# Imprimir valores recibidos
											$varf_tc_1_blue = $value['lbl_azp_ibn_pdf_text_color_t_blue'];
											$varf_tc_1_green = $value['lbl_azp_ibn_pdf_text_color_t_green'];
											$varf_tc_1_label = $value['lbl_azp_ibn_pdf_text_color_t_label'];
											$varf_tc_1_red = $value['lbl_azp_ibn_pdf_text_color_t_red'];
										}
									} else { $varf_tc_1_blue = ''; $varf_tc_1_green = ''; $varf_tc_1_label = ''; $varf_tc_1_red = ''; }
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_text_color_2) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_text_color_2 as $key => $value) {
											# Imprimir valores recibidos
											$varf_tc_2_blue = $value['lbl_azp_ibn_pdf_text_color_t_blue'];
											$varf_tc_2_green = $value['lbl_azp_ibn_pdf_text_color_t_green'];
											$varf_tc_2_label = $value['lbl_azp_ibn_pdf_text_color_t_label'];
											$varf_tc_2_red = $value['lbl_azp_ibn_pdf_text_color_t_red'];
										}
									} else { $varf_tc_2_blue = ''; $varf_tc_2_green = ''; $varf_tc_2_label = ''; $varf_tc_2_red = ''; }
									#--------------------------------------------------------#
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (true == $varf_text_color_3) {
										# Recorrer los datos de la consulta de la tabla y encodificarlos
										foreach ($varf_text_color_3 as $key => $value) {
											# Imprimir valores recibidos
											$varf_tc_3_blue = $value['lbl_azp_ibn_pdf_text_color_t_blue'];
											$varf_tc_3_green = $value['lbl_azp_ibn_pdf_text_color_t_green'];
											$varf_tc_3_label = $value['lbl_azp_ibn_pdf_text_color_t_label'];
											$varf_tc_3_red = $value['lbl_azp_ibn_pdf_text_color_t_red'];
										}
									} else { $varf_tc_3_blue = ''; $varf_tc_3_green = ''; $varf_tc_3_label = ''; $varf_tc_3_red = ''; }
									#--------------------------------------------------------#
									$pdf = new FPDF();
									$pdf->AliasNbPages();
									$pdf->AddPage('','','Letter');
									#--------------------------------------------------------#
									$pdf->AddFont('Lemonmilk-Bold', '', 'LEMONMILK-Bold.php');
									$pdf->AddFont('Lemonmilk-BoldItalic', '', 'LEMONMILK-BoldItalic.php');
									$pdf->AddFont('Lemonmilk-Light', '', 'LEMONMILK-Light.php');
									$pdf->AddFont('Lemonmilk-LightItalic', '', 'LEMONMILK-LightItalic.php');
									$pdf->AddFont('Lemonmilk-Medium', '', 'LEMONMILK-Medium.php');
									$pdf->AddFont('Lemonmilk-MediumItalic', '', 'LEMONMILK-MediumItalic.php');
									$pdf->AddFont('Lemonmilk-Regular', '', 'LEMONMILK-Regular.php');
									$pdf->AddFont('Lemonmilk-RegularItalic', '', 'LEMONMILK-RegularItalic.php');
									#--------------------------------------------------------#
									$pdf->Ln(5);
									#--------------------------------------------------------#
									# Interfaz DIT: Titulo General
									$pdf->SetFont($varf_ft_1_family, $varf_ft_1_style, 14);
									$pdf->SetFillColor($varf_fc_1_red, $varf_fc_1_green, $varf_fc_1_blue);
									$pdf->SetTextColor($varf_tc_1_red, $varf_tc_1_green, $varf_tc_1_blue);
									$pdf->Cell(75, 5, utf8_decode('D.I.T.'), $varf_cl_1_bo, $varf_cl_1_li, $varf_cl_1_al, $varf_cl_1_fi, $varf_cl_1_lk);
									#--------------------------------------------------------#
									$pdf->Ln(5);
									#--------------------------------------------------------#
									# Interfaz DIT: Titulo General
									$pdf->SetFont($varf_ft_1_family, $varf_ft_1_style, $varf_ft_1_size);
									$pdf->SetFillColor($varf_fc_1_red, $varf_fc_1_green, $varf_fc_1_blue);
									$pdf->SetTextColor($varf_tc_1_red, $varf_tc_1_green, $varf_tc_1_blue);
									$pdf->Cell(75, 5, utf8_decode('DIAGNOSTICO INTEGRAL POR TITULAR'), $varf_cl_1_bo, $varf_cl_1_li, $varf_cl_1_al, $varf_cl_1_fi, $varf_cl_1_lk);
									#--------------------------------------------------------#
									$pdf->Ln(5);
									#--------------------------------------------------------#
									# Interfaz DIT: Titulo General
									$pdf->SetFont($varf_ft_1_family, $varf_ft_1_style, $varf_ft_1_size);
									$pdf->SetFillColor($varf_fc_1_red, $varf_fc_1_green, $varf_fc_1_blue);
									$pdf->SetTextColor($varf_tc_1_red, $varf_tc_1_green, $varf_tc_1_blue);
									$pdf->Cell(75, 5, utf8_decode('INVESTIGACION DE BIENES'), $varf_cl_1_bo, $varf_cl_1_li, $varf_cl_1_al, $varf_cl_1_fi, $varf_cl_1_lk);
									#--------------------------------------------------------#
									$pdf->Image($var_cl_image, 90, 12, 50);
									$pdf->Image('views/backend/images/logo.png', 150, 8, 50);
									#--------------------------------------------------------#
									$pdf->Ln(12);
									#--------------------------------------------------------#
									# Interfaz DIT: Campos Textos
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(38, 5, utf8_decode('Entidad Externa Investigadora'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									$pdf->Cell(44, 5, utf8_decode('GSC OUTSOURCING S.A.S'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									#--------------------------------------------------------#
									# Interfaz DIT: Campos Textos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(25, 5, utf8_decode('FECHA'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									$pdf->Cell(30, 5, $var_cp_date_arrival, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									#--------------------------------------------------------#
									# Interfaz DIT: Campos Textos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(25, 5, utf8_decode('CIUDAD'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									$pdf->Cell(28, 5, utf8_decode('BOGOTA'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									#--------------------------------------------------------#
									$pdf->Ln(6);
									#--------------------------------------------------------#
									# Interfaz DIT: Sub Titulos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
									$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
									$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
									$pdf->Cell(190, 5,utf8_decode( 'INFORMACIÓN PERSONAL'), $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
									#--------------------------------------------------------#
									$pdf->SetTextColor(0, 0, 0);
									$pdf->Ln(6);
									#--------------------------------------------------------#
									# Interfaz DIT: Campos Textos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(25, 5, utf8_decode('NOMBRE'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(85, 5, $var_dm_full_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									#--------------------------------------------------------#
									# Interfaz DIT: Campos Textos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(30, 5, utf8_decode('IDENTIFICACION'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(50, 5, $var_dm_identification, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									#--------------------------------------------------------#
									$pdf->Ln(5);
									#--------------------------------------------------------#
									# Interfaz DIT: Campos Textos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(25, 5, utf8_decode('NRO OBLIGACION'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(45, 5, $var_dm_nro_obligation, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									#--------------------------------------------------------#
									# Interfaz DIT: Campos Textos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(25, 5, utf8_decode('CONSECUTIVO'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(25, 5, $var_dm_consecutive, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									#--------------------------------------------------------#
									# Interfaz DIT: Campos Textos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(25, 5, utf8_decode('CIUDAD'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(45, 5, $var_dm_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									#--------------------------------------------------------#
									$pdf->Ln(6);
									#--------------------------------------------------------#
									# Interfaz DIT: Sub Titulos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
									$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
									$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
									$pdf->Cell(190, 5, utf8_decode('INVESTIGACION POR ACTIVIDAD ECONOMICA'), $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
									#--------------------------------------------------------#
									$pdf->SetTextColor(0, 0, 0);
									#--------------------------------------------------------#
									# Recorrer datos para validar si existe
									$var_result_furniture = $var_rst_furniture->fetchAll();
									$var_rst_furniture->closeCursor();
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_result_furniture) {
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $var_dit_furniture) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($var_dit_furniture as $key => $value) {
												# Imprimir valores recibidos
												$var_fu_id = utf8_decode($value['lbl_azp_ibn_furniture_id_azp_ibn_furniture']);
												$var_fu_address = utf8_decode($value['lbl_azp_ibn_furniture_t_address']);
												$var_fu_business_name = utf8_decode($value['lbl_azp_ibn_furniture_t_business_name']);
												$var_fu_city = utf8_decode($value['lbl_azp_ibn_furniture_t_city']);
												$var_fu_consecutive = utf8_decode($value['lbl_azp_ibn_furniture_t_consecutive']);
												$var_fu_department = utf8_decode($value['lbl_azp_ibn_furniture_t_department']);
												$var_fu_entity = utf8_decode($value['lbl_azp_ibn_furniture_t_entity']);
												$var_fu_full_name = utf8_decode($value['lbl_azp_ibn_furniture_t_full_name']);
												$var_fu_identification = utf8_decode($value['lbl_azp_ibn_furniture_t_identification']);
												$var_fu_municipality = utf8_decode($value['lbl_azp_ibn_furniture_t_municipality']);
												$var_fu_nit = utf8_decode($value['lbl_azp_ibn_furniture_t_nit']);
												$var_fu_observation[$var_fu_id] = utf8_decode($value['lbl_azp_ibn_furniture_t_concept']);
												$var_fu_phone = utf8_decode($value['lbl_azp_ibn_furniture_t_phone']);
												//$var_fu_salary = utf8_decode($value['lbl_azp_ibn_furniture_t_salary']);
												$var_fu_salary = utf8_decode($value['lbl_azp_ibn_rank_t_name']);
												$var_fu_viable_causal = utf8_decode($value['lbl_azp_ibn_furniture_t_viable_causal']);
												$var_fu_well_option = utf8_decode($value['lbl_azp_ibn_furniture_t_well_option']);
												$var_fu_well_viable = utf8_decode($value['lbl_azp_ibn_furniture_t_well_viable']);
												$var_fu_type_contributor = utf8_decode($value['lbl_azp_ibn_type_contributor_t_name']);
												#--------------------------------------------------------#
												$pdf->Ln(6);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'NIT', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(45, 5, $var_fu_nit, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'ORGANIZACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(40, 5, $var_fu_business_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'CIUDAD', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(45, 5, $var_fu_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'DEPARTAMENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(45, 5, $var_fu_department, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'MUNICIPIO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(40, 5, $var_fu_municipality, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'DIRECCION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(45, 5, $var_fu_address, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'TELEFONO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(45, 5, $var_fu_phone, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'SALARIO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(40, 5, $var_fu_salary, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'TIPO DE COTIZANTE', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(45, 5, $var_fu_type_contributor, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#--------------------------------------------------------#
											}
										} else {
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICO ACTIVIDAD LABORAL RELACIONADA AL TITULAR',
												$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										}
									} else {
										$pdf->Ln(6);
										#------------------------------#
										# Interfaz DIT: Campos Textos
										#------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICO ACTIVIDAD LABORAL RELACIONADA AL TITULAR',
											$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									}
									#--------------------------------------------------------#
									$pdf->Ln(6);
									#--------------------------------------------------------#
									# Interfaz DIT: Sub Titulos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
									$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
									$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
									$pdf->Cell(190, 5, 'INVESTIGACION POR INMUEBLE', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
									#--------------------------------------------------------#
									$pdf->SetTextColor(0, 0, 0);
									#--------------------------------------------------------#
									# Recorrer datos para validar si existe
									$var_result_property = $var_rst_property->fetchAll();
									$var_rst_property->closeCursor();
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_result_property) {
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $var_dit_property) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($var_dit_property as $key => $value) {
												# Imprimir valores recibidos
												$var_pr_id = utf8_decode($value['lbl_azp_ibn_property_id_azp_ibn_property']);
												$var_pr_address = utf8_decode($value['lbl_azp_ibn_property_t_address']);
												$var_pr_area = utf8_decode($value['lbl_azp_ibn_property_t_area']);
												$var_pr_assessment = utf8_decode($value['lbl_azp_ibn_property_t_assessment']);
												$var_pr_causal_feasibility = utf8_decode($value['lbl_azp_ibn_property_t_causal_feasibility']);
												$var_pr_consecutive = utf8_decode($value['lbl_azp_ibn_property_t_consecutive']);
												$var_pr_department = utf8_decode($value['lbl_azp_ibn_property_t_department']);
												$var_pr_full_name = utf8_decode($value['lbl_azp_ibn_property_t_full_name']);
												$var_pr_identification = utf8_decode($value['lbl_azp_ibn_property_t_identification']);
												$var_pr_market_value = utf8_decode($value['lbl_azp_ibn_property_t_market_value']);
												$var_pr_municipality = utf8_decode($value['lbl_azp_ibn_property_t_municipality']);
												$var_pr_nro_registration = utf8_decode($value['lbl_azp_ibn_property_t_nro_registration']);
												$var_pr_observation[$var_pr_id] = utf8_decode($value['lbl_azp_ibn_property_t_concept']);
												$var_pr_ownership = utf8_decode($value['lbl_azp_ibn_property_t_ownership']);
												$var_pr_purchase_annotation = utf8_decode($value['lbl_azp_ibn_property_t_purchase_annotation']);
												$var_pr_viable = utf8_decode($value['lbl_azp_ibn_property_t_viable']);
												$var_pr_well_viable = utf8_decode($value['lbl_azp_ibn_property_t_well_viable']);
												#--------------------------------------------------------#
												$pdf->Ln(6);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(25, 15, 'INMUEBLE ', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'CIUDAD', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(55, 5, $var_pr_municipality, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'DIRECCION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(70, 5, $var_pr_address, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												$pdf->SetX(35);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'DEPARTAMENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(60, 5, $var_pr_department, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'MATRICULA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(65, 5, $var_pr_nro_registration, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												$pdf->SetX(35);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'LIMITACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(145, 5, $var_pr_assessment, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#--------------------------------------------------------#
											}
										} else {
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON BIENES INMUEBLES A NOMBRE DEL TITULAR',
												$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										}
									} else {
										$pdf->Ln(6);
										#------------------------------#
										# Interfaz DIT: Campos Textos
										#------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON BIENES INMUEBLES A NOMBRE DEL TITULAR',
											$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									}
									#--------------------------------------------------------#
									$pdf->Ln(6);
									#--------------------------------------------------------#
									# Interfaz DIT: Sub Titulos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
									$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
									$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
									$pdf->Cell(190, 5, 'INVESTIGACION POR VEHICULO', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
									#--------------------------------------------------------#
									$pdf->SetTextColor(0, 0, 0);
									#--------------------------------------------------------#
									# Recorrer datos para validar si existe
									$var_result_vehicle = $var_rst_vehicle->fetchAll();
									$var_rst_vehicle->closeCursor();
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_result_vehicle) {
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $var_dit_vehicle) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($var_dit_vehicle as $key => $value) {
												# Imprimir valores recibidos
												$var_vh_id = utf8_decode($value['lbl_azp_ibn_vehicle_id_azp_ibn_vehicle']);
												$var_vh_assessment = utf8_decode($value['lbl_azp_ibn_vehicle_t_assessment']);
												$var_vh_causal_feasibility = utf8_decode($value['lbl_azp_ibn_vehicle_t_causal_feasibility']);
												$var_vh_city = utf8_decode($value['lbl_azp_ibn_vehicle_t_city']);
												$var_vh_class = utf8_decode($value['lbl_azp_ibn_vehicle_t_class']);
												$var_vh_color = utf8_decode($value['lbl_azp_ibn_vehicle_t_color']);
												$var_vh_consecutive = utf8_decode($value['lbl_azp_ibn_vehicle_t_consecutive']);
												$var_vh_full_name = utf8_decode($value['lbl_azp_ibn_vehicle_t_full_name']);
												$var_vh_identification = utf8_decode($value['lbl_azp_ibn_vehicle_t_identification']);
												$var_vh_line = utf8_decode($value['lbl_azp_ibn_vehicle_t_line']);
												$var_vh_make_camera = utf8_decode($value['lbl_azp_ibn_vehicle_t_make_camera']);
												$var_vh_mark = utf8_decode($value['lbl_azp_ibn_vehicle_t_mark']);
												$var_vh_model = utf8_decode($value['lbl_azp_ibn_vehicle_t_model']);
												$var_vh_observation[$var_vh_id] = utf8_decode($value['lbl_azp_ibn_vehicle_t_concept']);
												$var_vh_plaque = utf8_decode($value['lbl_azp_ibn_vehicle_t_plaque']);
												$var_vh_service = utf8_decode($value['lbl_azp_ibn_vehicle_t_service']);
												$var_vh_value_assessment = utf8_decode($value['lbl_azp_ibn_vehicle_t_value_assessment']);
												$var_vh_value_vehicle = utf8_decode($value['lbl_azp_ibn_vehicle_t_value_vehicle']);
												$var_vh_viable = utf8_decode($value['lbl_azp_ibn_vehicle_t_viable']);
												$var_vh_well_viable = utf8_decode($value['lbl_azp_ibn_vehicle_t_well_viable']);
												#--------------------------------------------------------#
												$pdf->Ln(6);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(25, 15, 'VEHICULO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'MARCA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(55, 5, $var_vh_mark, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'MODELO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(70, 5, $var_vh_model, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												$pdf->SetX(35);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(13, 5, 'PLACA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(41, 5, $var_vh_plaque, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(13, 5, 'CLASE', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(41, 5, $var_vh_class, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(14, 5, 'UBICACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(43, 5, $var_vh_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												$pdf->SetX(35);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'LIMITACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(145, 5, $var_vh_assessment, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#--------------------------------------------------------#
											}
										} else {
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON VEHICULOS A NOMBRE DEL TITULAR',
												$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										}
									} else {
										$pdf->Ln(6);
										#------------------------------#
										# Interfaz DIT: Campos Textos
										#------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON VEHICULOS A NOMBRE DEL TITULAR',
											$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									}
									#--------------------------------------------------------#
									$pdf->Ln(6);
									#--------------------------------------------------------#
									# Interfaz DIT: Sub Titulos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
									$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
									$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
									$pdf->Cell(190, 5, 'INVESTIGACION POR ESTABLECIMIENTO DE COMERCIO', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
									#--------------------------------------------------------#
									$pdf->SetTextColor(0, 0, 0);
									#--------------------------------------------------------#
									# Recorrer datos para validar si existe
									$var_result_camera = $var_rst_camera->fetchAll();
									$var_rst_camera->closeCursor();
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_result_camera) {
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $var_dit_camera) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($var_dit_camera as $key => $value) {
												# Imprimir valores recibidos
												$var_cm_id = utf8_decode($value['lbl_azp_ibn_camera_id_azp_ibn_camera']);
												$var_cm_act_economic = utf8_decode($value['lbl_azp_ibn_camera_t_act_economic']);
												$var_cm_address = utf8_decode($value['lbl_azp_ibn_camera_t_address']);
												$var_cm_assessment = utf8_decode($value['lbl_azp_ibn_camera_t_assessment']);
												$var_cm_business_name = utf8_decode($value['lbl_azp_ibn_camera_t_business_name']);
												$var_cm_causal_feasibility = utf8_decode($value['lbl_azp_ibn_camera_t_causal_feasibility']);
												$var_cm_city = utf8_decode($value['lbl_azp_ibn_camera_t_city']);
												$var_cm_consecutive = utf8_decode($value['lbl_azp_ibn_camera_t_consecutive']);
												$var_cm_department = utf8_decode($value['lbl_azp_ibn_camera_t_department']);
												$var_cm_establishment = utf8_decode($value['lbl_azp_ibn_camera_t_establishment']);
												$var_cm_full_name = utf8_decode($value['lbl_azp_ibn_camera_t_full_name']);
												$var_cm_identification = utf8_decode($value['lbl_azp_ibn_camera_t_identification']);
												$var_cm_legal_representative = utf8_decode($value['lbl_azp_ibn_camera_t_legal_representative']);
												$var_cm_legal_rp_certificate = utf8_decode($value['lbl_azp_ibn_camera_t_legal_rp_certificate']);
												$var_cm_municipality = utf8_decode($value['lbl_azp_ibn_camera_t_municipality']);
												$var_cm_nit = utf8_decode($value['lbl_azp_ibn_camera_t_nit']);
												$var_cm_nro_registration = utf8_decode($value['lbl_azp_ibn_camera_t_nro_registration']);
												$var_cm_observation[$var_cm_id] = utf8_decode($value['lbl_azp_ibn_camera_t_concept']);
												$var_cm_phone = utf8_decode($value['lbl_azp_ibn_camera_t_phone']);
												$var_cm_renewal_date = utf8_decode($value['lbl_azp_ibn_camera_t_renewal_date']);
												$var_cm_rup = utf8_decode($value['lbl_azp_ibn_camera_t_rup']);
												$var_cm_total_active = utf8_decode($value['lbl_azp_ibn_camera_t_total_active']);
												$var_cm_type_company = utf8_decode($value['lbl_azp_ibn_camera_t_type_company']);
												$var_cm_type_organization = utf8_decode($value['lbl_azp_ibn_camera_t_type_organization']);
												$var_cm_viable = utf8_decode($value['lbl_azp_ibn_camera_t_viable']);
												$var_cm_well_viable = utf8_decode($value['lbl_azp_ibn_camera_t_well_viable']);
												$var_cm_year = utf8_decode($value['lbl_azp_ibn_camera_t_year']);
												#--------------------------------------------------------#
												$pdf->Ln(6);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'RAZON SOCIAL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(75, 5, $var_cm_business_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'NIT', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(75, 5, $var_cm_nit, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'ESTABLECIMIENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(170, 5, $var_cm_establishment, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'TELEFONO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(45, 5, $var_cm_phone, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'CIUDAD', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(40, 5, $var_cm_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'DEPARTAMENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(45, 5, $var_cm_department, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(30, 5, 'MATRICULA MERCANTIL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(65, 5, $var_cm_nro_registration, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'ADICIONALES', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(75, 5, '', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(25, 5, 'CEDULA REPR LEGAL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(70, 5, $var_cm_legal_rp_certificate, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(25, 5, 'NOMBRE REPR LEGAL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(70, 5, $var_cm_legal_representative, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'TIPO ORGANIZACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(45, 5, $var_cm_type_organization, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'FECHA RENOVACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(40, 5, $var_cm_renewal_date, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'RUP', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(45, 5, $var_cm_rup, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#--------------------------------------------------------#
											}
										} else {
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON CAMARAS A NOMBRE DEL TITULAR',
												$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										}
									} else {
										$pdf->Ln(6);
										#------------------------------#
										# Interfaz DIT: Campos Textos
										#------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON CAMARAS A NOMBRE DEL TITULAR',
											$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									}
									#--------------------------------------------------------#
									$pdf->Ln(6);
									#--------------------------------------------------------#
									# Interfaz DIT: Sub Titulos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
									$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
									$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
									$pdf->Cell(190, 5, 'INVESTIGACION POR GARANTIAS MOBILIARIAS', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
									#--------------------------------------------------------#
									$pdf->SetTextColor(0, 0, 0);
									#--------------------------------------------------------#
									# Recorrer datos para validar si existe
									$var_result_warranty = $var_rst_warranty->fetchAll();
									$var_rst_warranty->closeCursor();
									# Validar si la sentencia query ejecutada es correcta y no falsa
									if (false != $var_result_warranty) {
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $var_dit_warranty) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($var_dit_warranty as $key => $value) {
												# Imprimir valores recibidos
												$var_wr_id = utf8_decode($value['lbl_azp_ibn_warranty_id_azp_ibn_warranty']);
												$var_wr_consecutive = utf8_decode($value['lbl_azp_ibn_warranty_t_consecutive']);
												$var_wr_creditor = utf8_decode($value['lbl_azp_ibn_warranty_t_creditor']);
												$var_wr_date = utf8_decode($value['lbl_azp_ibn_warranty_t_date']);
												$var_wr_full_name = utf8_decode($value['lbl_azp_ibn_warranty_t_full_name']);
												$var_wr_identification = utf8_decode($value['lbl_azp_ibn_warranty_t_identification']);
												$var_wr_observation[$var_wr_id] = utf8_decode($value['lbl_azp_ibn_warranty_t_concept']);
												$var_wr_well_detail = utf8_decode($value['lbl_azp_ibn_warranty_t_well_detail']);
												$var_wr_well_name = utf8_decode($value['lbl_azp_ibn_warranty_t_well_name']);
												$var_wr_value = utf8_decode($value['lbl_azp_ibn_warranty_t_value']);
												#--------------------------------------------------------#
												$pdf->Ln(6);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'ACREEDOR', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(75, 5, $var_wr_creditor, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'VALOR', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(75, 5, $var_wr_value, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												$pdf->Ln(5);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'BIEN', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(75, 5, $var_wr_well_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(20, 5, 'FECHA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(75, 5, $var_wr_date, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
												#------------------------------#
											}
										} else {
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON GARANTIAS MOBILIARIAS A NOMBRE DEL TITULAR',
												$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										}
									} else {
										$pdf->Ln(6);
										#------------------------------#
										# Interfaz DIT: Campos Textos
										#------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON GARANTIAS MOBILIARIAS A NOMBRE DEL TITULAR',
											$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									}
									#--------------------------------------------------------#
									$pdf->Ln(6);
									#--------------------------------------------------------#
									# Interfaz DIT: Sub Titulos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
									$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
									$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
									$pdf->Cell(190, 5, 'DIT: DIAGNOSTICO INTEGRAL POR TITULAR', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
									#--------------------------------------------------------#
									$pdf->SetTextColor(0, 0, 0);
									$pdf->Ln(6);
									#--------------------------------------------------------#
									$empty_pr_observation = implode(',', $var_pr_observation);
									$empty_vh_observation = implode(',', $var_vh_observation);
									$empty_cm_observation = implode(',', $var_cm_observation);
									$empty_fu_observation = implode(',', $var_fu_observation);
									$empty_wr_observation = implode(',', $var_wr_observation);
									#--------------------------------------------------------#
									# Interfaz DIT: Campos Textos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->MultiCell(190, 4, 'INMUEBLE: ' . $empty_pr_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
									$pdf->MultiCell(190, 4, 'VEHICULOS: ' . $empty_vh_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
									$pdf->MultiCell(190, 4, 'CAMARA DE COMERCIO:' . $empty_cm_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
									$pdf->MultiCell(190, 4, 'SALARIO:' . $empty_fu_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
									$pdf->MultiCell(190, 4, 'GARANTIAS MOBILIARIAS:' . $empty_wr_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
									#--------------------------------------------------------#
									$pdf->Ln(2);
									#--------------------------------------------------------#
									# Interfaz DIT: Campos Textos
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(70, 5, 'VIABILIDAD PARA JUDICIALIZAR ', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									#--------------------------------------------------------#
									$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
									$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
									$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
									$pdf->Cell(120, 5, '', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
									#--------------------------------------------------------#
									$pdf->Ln(6);
									#--------------------------------------------------------#
									$pdf->Image('views/backend/images/firm.png');
									#--------------------------------------------------------#
									$pdf->Ln(3);
									#--------------------------------------------------------#
									$pdf->SetFont('Arial', 'B', 7);
									$pdf->Cell(190, 5, 'MARGARITA GIRALDO DE SANCHEZ', 0, 0,);
									#--------------------------------------------------------#
									$pdf->Ln(3);
									#--------------------------------------------------------#
									$pdf->SetFont('Arial', 'B', 7);
									$pdf->Cell(190, 5, 'DIRECTORA PROCESOS', 0, 0,);
									#--------------------------------------------------------#
									$pdf->Ln(3);
									#--------------------------------------------------------#
									$pdf->SetFont('Arial', 'B', 7);
									$pdf->Cell(190, 5, 'REVISION GSC OUTSOURCING S.A.S.', 0, 0,);
									#--------------------------------------------------------#
									$var_w_document = 'DIT' . '_' . $var_dm_identification . '.pdf';
									$var_w_error = '0';
									$var_w_folder = 'azp_ibn_control_panel/' . $var_dm_control_panel . '/' . $var_dm_identification . '/';
									$var_w_name = DATE_NUMBER . ' ' . HOUR_NUMBER . '.pdf';
									$var_w_route = '../systemfiles/filesproject/';
									$var_w_size = '0';
									$var_w_tmp_name = '0';
									$var_w_type = 'application/pdf';
									#--------------------------------------------------------#
									# Dar permisos a la carpeta y archivo
									chmod(str_replace('../', '', $var_w_route) . $var_w_folder, 0777);
									#--------------------------------------------------------#
									$var_route_pdf = str_replace('../', '', $var_w_route) . $var_w_folder . $var_w_document;
									$pdf->Output('F', $var_route_pdf, true);
									#--------------------------------------------------------#
									# Dar permisos a la carpeta y archivo
									chmod($var_route_pdf, 0777);
									#--------------------------------------------------------#
									$var_data = array(
										'lbl_id' => $var_dm_id,
										//'lbl_identification' => $var_dm_identification,
										'lbl_document' => $var_w_document,
										'lbl_error' => $var_w_error,
										'lbl_folder' => $var_w_folder,
										'lbl_name' => $var_w_name,
										'lbl_route' => $var_w_route,
										'lbl_size' => $var_w_size,
										'lbl_tmp_name' => $var_w_tmp_name,
										'lbl_type' => $var_w_type,
									);
									$var_m_zv_dashboard->sql_azp_ibn_dit_data_main_dit_img_pdf($var_data, $var_dm_control_panel);
								}
							}
							$var_m_zv_dashboard->sql_azp_ibn_dit_data_main_dit_img_zip($var_dm_control_panel);
						}
						# Finalizar el codigo
						exit();
						break;
					case 'cpdownload':
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_ver = $var_m_zv_dashboard->sql_controller_file_zip();
						# Recorrer los datos de la consulta de la tabla para validacion de existencia
						if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
						# Validacion de si existe mas de un dato para encodificarlos
						if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_file_zip();
							# Imprimir una variable adicional
							echo $var_start = '{"status":true,"data":';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
							# Imprimir una variable adicional
							echo $var_end = '}';
						}
						break;











					case 'dwvalidatetm':
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_ver = $var_m_zv_dashboard->sql_controller_dit_row_num();
						# Recorrer los datos de la consulta de la tabla para validacion de existencia
						if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
						# Validacion de si existe mas de un dato para encodificarlos
						if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_dit_row_num();
							# Imprimir una variable adicional
							echo $var_start = '{"status":true,"data":';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
							# Imprimir una variable adicional
							echo $var_end = '}';
						}
						break;
					case 'dwrownum':
						# Control para la validacion de valores get
						if ($this->isset_id) { $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_data_ceil_num(); }
						# Finalizar el codigo
						exit();
						break;
					case 'dwdelete':
						$var_m_zv_dashboard->sql_azp_ibn_compress_delete();
						exit();
						break;
					case 'ibncompress':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_compress();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'dwarchive':
						if (isset($_GET['field_data'])) { $var_idd = $_GET['field_data']; } else { $var_idd = 0; }
						# Consultar helper y sus opciones
						Helper::load('files');
						# Ruta de la carpeta con cedulas
						$var_rout_rm = 'systemfiles/filesproject/azp_ibn_control_panel/' . $var_idd . '/archive/';
						# Creacion de carpetas en el desarrollo
						Files::rm_dir($var_rout_rm);
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Definir valor de variable
							$var_validate = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_dit_data_main = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_data_group();
							#--------------------------------------------------------#
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (true == $var_dit_data_main) {
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($var_dit_data_main as $key => $value) {
									//echo $value['lbl_azp_ibn_data_main_t_acount'] . '<br>';
										$var_pr_observation = array();
										$var_vh_observation = array();
										$var_cm_observation = array();
										$var_fu_observation = array();
										$var_wr_observation = array();
										# Imprimir valores recibidos
										$var_dm_id = $value['lbl_azp_ibn_data_main_id_azp_ibn_data_main'];
										$var_dm_city = $value['lbl_azp_ibn_data_main_t_city'];
										$var_dm_code = $value['lbl_azp_ibn_data_main_t_code'];
										$var_dm_consecutive = $value['lbl_azp_ibn_data_main_t_consecutive'];
										$var_dm_department = $value['lbl_azp_ibn_data_main_t_department'];
										$var_dm_full_name = $value['lbl_azp_ibn_data_main_t_full_name'];
										$var_dm_identification = $value['lbl_azp_ibn_data_main_t_identification'];
										$var_dm_nro_obligation = $value['lbl_azp_ibn_data_main_t_nro_obligation'];
										$var_dm_control_panel = $value['lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel'];
										$var_cp_date_arrival = $value['lbl_azp_ibn_control_panel_t_date_arrival'];
										$var_cl_document = $value['lbl_azp_ibn_client_w_document'];
										$var_cl_folder = $value['lbl_azp_ibn_client_w_folder'];
										$var_cl_route = str_replace('../', '', $value['lbl_azp_ibn_client_w_route']);
										$var_cl_image = $var_cl_route . $var_cl_folder . $var_cl_document;
										#--------------------------------------------------------#
										# Ruta de la carpeta con cedulas
										$var_route = 'systemfiles/filesproject/azp_ibn_control_panel/' . $var_dm_control_panel . '/' . $var_dm_identification . '/';
										# Consultar helper y sus opciones
										Helper::load('files');
										# Creacion de carpetas en el desarrollo
										Files::create_dir($var_route, 0777);
										# Dar permisos a la carpeta y archivo
										chmod($var_route, 0777);
										#--------------------------------------------------------#
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_dit_camera = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_camera($var_dm_identification);
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_dit_furniture = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_furniture($var_dm_identification);
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_dit_property = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_property($var_dm_identification);
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_dit_vehicle = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_vehicle($var_dm_identification);
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_dit_warranty = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_warranty($var_dm_identification);
										#--------------------------------------------------------#
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_rst_data_main = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_data_group();
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_rst_camera = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_camera($var_dm_identification);
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_rst_furniture = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_furniture($var_dm_identification);
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_rst_property = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_property($var_dm_identification);
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_rst_vehicle = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_vehicle($var_dm_identification);
										# Consultar registros de la tabla por medio del modelo instanciado
										$var_rst_warranty = $var_m_zv_dashboard->sql_select_tc_azp_ibn_dit_warranty($var_dm_identification);
										#--------------------------------------------------------#
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_cell_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_cell_1();
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_cell_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_cell_2();
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_cell_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_cell_3();
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_cell_1) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_cell_1 as $key => $value) {
												# Imprimir valores recibidos
												$varf_cl_1_al = $value['lbl_azp_ibn_pdf_cell_t_align'];
												$varf_cl_1_bo = $value['lbl_azp_ibn_pdf_cell_t_border'];
												$varf_cl_1_fi = $value['lbl_azp_ibn_pdf_cell_t_fill'];
												$varf_cl_1_he = $value['lbl_azp_ibn_pdf_cell_t_height'];
												$varf_cl_1_li = $value['lbl_azp_ibn_pdf_cell_t_line'];
												$varf_cl_1_lk = $value['lbl_azp_ibn_pdf_cell_t_link'];
												$varf_cl_1_te = $value['lbl_azp_ibn_pdf_cell_t_text'];
												$varf_cl_1_wi = $value['lbl_azp_ibn_pdf_cell_t_width'];
											}
										} else {
											$varf_cl_1_al = ''; $varf_cl_1_bo = ''; $varf_cl_1_fi = ''; $varf_cl_1_he = '';
											$varf_cl_1_li = ''; $varf_cl_1_lk = ''; $varf_cl_1_te = ''; $varf_cl_1_wi = '';
										}
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_cell_2) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_cell_2 as $key => $value) {
												# Imprimir valores recibidos
												$varf_cl_2_al = $value['lbl_azp_ibn_pdf_cell_t_align'];
												$varf_cl_2_bo = $value['lbl_azp_ibn_pdf_cell_t_border'];
												$varf_cl_2_fi = $value['lbl_azp_ibn_pdf_cell_t_fill'];
												$varf_cl_2_he = $value['lbl_azp_ibn_pdf_cell_t_height'];
												$varf_cl_2_li = $value['lbl_azp_ibn_pdf_cell_t_line'];
												$varf_cl_2_lk = $value['lbl_azp_ibn_pdf_cell_t_link'];
												$varf_cl_2_te = $value['lbl_azp_ibn_pdf_cell_t_text'];
												$varf_cl_2_wi = $value['lbl_azp_ibn_pdf_cell_t_width'];
											}
										} else {
											$varf_cl_2_al = ''; $varf_cl_2_bo = ''; $varf_cl_2_fi = ''; $varf_cl_2_he = '';
											$varf_cl_2_li = ''; $varf_cl_2_lk = ''; $varf_cl_2_te = ''; $varf_cl_2_wi = '';
										}
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_cell_3) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_cell_3 as $key => $value) {
												# Imprimir valores recibidos
												$varf_cl_3_al = $value['lbl_azp_ibn_pdf_cell_t_align'];
												$varf_cl_3_bo = $value['lbl_azp_ibn_pdf_cell_t_border'];
												$varf_cl_3_fi = $value['lbl_azp_ibn_pdf_cell_t_fill'];
												$varf_cl_3_he = $value['lbl_azp_ibn_pdf_cell_t_height'];
												$varf_cl_3_li = $value['lbl_azp_ibn_pdf_cell_t_line'];
												$varf_cl_3_lk = $value['lbl_azp_ibn_pdf_cell_t_link'];
												$varf_cl_3_te = $value['lbl_azp_ibn_pdf_cell_t_text'];
												$varf_cl_3_wi = $value['lbl_azp_ibn_pdf_cell_t_width'];
											}
										} else {
											$varf_cl_3_al = ''; $varf_cl_3_bo = ''; $varf_cl_3_fi = ''; $varf_cl_3_he = '';
											$varf_cl_3_li = ''; $varf_cl_3_lk = ''; $varf_cl_3_te = ''; $varf_cl_3_wi = '';
										}
										#--------------------------------------------------------#
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_fill_color_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_fill_color_1();
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_fill_color_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_fill_color_2();
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_fill_color_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_fill_color_3();
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_fill_color_1) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_fill_color_1 as $key => $value) {
												# Imprimir valores recibidos
												$varf_fc_1_blue = $value['lbl_azp_ibn_pdf_fill_color_t_blue'];
												$varf_fc_1_green = $value['lbl_azp_ibn_pdf_fill_color_t_green'];
												$varf_fc_1_label = $value['lbl_azp_ibn_pdf_fill_color_t_label'];
												$varf_fc_1_red = $value['lbl_azp_ibn_pdf_fill_color_t_red'];
											}
										} else { $varf_fc_1_blue = ''; $varf_fc_1_green = ''; $varf_fc_1_label = ''; $varf_fc_1_red = ''; }
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_fill_color_2) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_fill_color_2 as $key => $value) {
												# Imprimir valores recibidos
												$varf_fc_2_blue = $value['lbl_azp_ibn_pdf_fill_color_t_blue'];
												$varf_fc_2_green = $value['lbl_azp_ibn_pdf_fill_color_t_green'];
												$varf_fc_2_label = $value['lbl_azp_ibn_pdf_fill_color_t_label'];
												$varf_fc_2_red = $value['lbl_azp_ibn_pdf_fill_color_t_red'];
											}
										} else { $varf_fc_2_blue = ''; $varf_fc_2_green = ''; $varf_fc_2_label = ''; $varf_fc_2_red = ''; }
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_fill_color_3) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_fill_color_3 as $key => $value) {
												# Imprimir valores recibidos
												$varf_fc_3_blue = $value['lbl_azp_ibn_pdf_fill_color_t_blue'];
												$varf_fc_3_green = $value['lbl_azp_ibn_pdf_fill_color_t_green'];
												$varf_fc_3_label = $value['lbl_azp_ibn_pdf_fill_color_t_label'];
												$varf_fc_3_red = $value['lbl_azp_ibn_pdf_fill_color_t_red'];
											}
										} else { $varf_fc_3_blue = ''; $varf_fc_3_green = ''; $varf_fc_3_label = ''; $varf_fc_3_red = ''; }
										#--------------------------------------------------------#
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_font_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_font_1();
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_font_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_font_2();
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_font_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_font_3();
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_font_1) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_font_1 as $key => $value) {
												# Imprimir valores recibidos
												$varf_ft_1_family = $value['lbl_azp_ibn_pdf_font_t_family'];
												$varf_ft_1_size = $value['lbl_azp_ibn_pdf_font_t_size'];
												$varf_ft_1_style = str_replace('NINGUNO', '', $value['lbl_azp_ibn_pdf_font_t_style']);
											}
										} else { $varf_ft_1_family = ''; $varf_ft_1_size = ''; $varf_ft_1_style = ''; }
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_font_2) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_font_2 as $key => $value) {
												# Imprimir valores recibidos
												$varf_ft_2_family = $value['lbl_azp_ibn_pdf_font_t_family'];
												$varf_ft_2_size = $value['lbl_azp_ibn_pdf_font_t_size'];
												$varf_ft_2_style = str_replace('NINGUNO', '', $value['lbl_azp_ibn_pdf_font_t_style']);
											}
										} else { $varf_ft_2_family = ''; $varf_ft_2_size = ''; $varf_ft_2_style = ''; }
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_font_3) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_font_3 as $key => $value) {
												# Imprimir valores recibidos
												$varf_ft_3_family = $value['lbl_azp_ibn_pdf_font_t_family'];
												$varf_ft_3_size = $value['lbl_azp_ibn_pdf_font_t_size'];
												$varf_ft_3_style = str_replace('NINGUNO', '', $value['lbl_azp_ibn_pdf_font_t_style']);
											}
										} else { $varf_ft_3_family = ''; $varf_ft_3_size = ''; $varf_ft_3_style = ''; }
										#--------------------------------------------------------#
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_text_color_1 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_text_color_1();
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_text_color_2 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_text_color_2();
										# Consultar registros de la tabla por medio del modelo instanciado
										$varf_text_color_3 = $var_m_zv_dashboard->sql_select_tc_azp_ibn_pdf_text_color_3();
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_text_color_1) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_text_color_1 as $key => $value) {
												# Imprimir valores recibidos
												$varf_tc_1_blue = $value['lbl_azp_ibn_pdf_text_color_t_blue'];
												$varf_tc_1_green = $value['lbl_azp_ibn_pdf_text_color_t_green'];
												$varf_tc_1_label = $value['lbl_azp_ibn_pdf_text_color_t_label'];
												$varf_tc_1_red = $value['lbl_azp_ibn_pdf_text_color_t_red'];
											}
										} else { $varf_tc_1_blue = ''; $varf_tc_1_green = ''; $varf_tc_1_label = ''; $varf_tc_1_red = ''; }
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_text_color_2) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_text_color_2 as $key => $value) {
												# Imprimir valores recibidos
												$varf_tc_2_blue = $value['lbl_azp_ibn_pdf_text_color_t_blue'];
												$varf_tc_2_green = $value['lbl_azp_ibn_pdf_text_color_t_green'];
												$varf_tc_2_label = $value['lbl_azp_ibn_pdf_text_color_t_label'];
												$varf_tc_2_red = $value['lbl_azp_ibn_pdf_text_color_t_red'];
											}
										} else { $varf_tc_2_blue = ''; $varf_tc_2_green = ''; $varf_tc_2_label = ''; $varf_tc_2_red = ''; }
										#--------------------------------------------------------#
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (true == $varf_text_color_3) {
											# Recorrer los datos de la consulta de la tabla y encodificarlos
											foreach ($varf_text_color_3 as $key => $value) {
												# Imprimir valores recibidos
												$varf_tc_3_blue = $value['lbl_azp_ibn_pdf_text_color_t_blue'];
												$varf_tc_3_green = $value['lbl_azp_ibn_pdf_text_color_t_green'];
												$varf_tc_3_label = $value['lbl_azp_ibn_pdf_text_color_t_label'];
												$varf_tc_3_red = $value['lbl_azp_ibn_pdf_text_color_t_red'];
											}
										} else { $varf_tc_3_blue = ''; $varf_tc_3_green = ''; $varf_tc_3_label = ''; $varf_tc_3_red = ''; }
										#--------------------------------------------------------#
										$pdf = new FPDF();
										$pdf->AliasNbPages();
										$pdf->AddPage('','','Letter');
										#--------------------------------------------------------#
										$pdf->AddFont('Lemonmilk-Bold', '', 'LEMONMILK-Bold.php');
										$pdf->AddFont('Lemonmilk-BoldItalic', '', 'LEMONMILK-BoldItalic.php');
										$pdf->AddFont('Lemonmilk-Light', '', 'LEMONMILK-Light.php');
										$pdf->AddFont('Lemonmilk-LightItalic', '', 'LEMONMILK-LightItalic.php');
										$pdf->AddFont('Lemonmilk-Medium', '', 'LEMONMILK-Medium.php');
										$pdf->AddFont('Lemonmilk-MediumItalic', '', 'LEMONMILK-MediumItalic.php');
										$pdf->AddFont('Lemonmilk-Regular', '', 'LEMONMILK-Regular.php');
										$pdf->AddFont('Lemonmilk-RegularItalic', '', 'LEMONMILK-RegularItalic.php');
										#--------------------------------------------------------#
										$pdf->Ln(5);
										#--------------------------------------------------------#
										# Interfaz DIT: Titulo General
										$pdf->SetFont($varf_ft_1_family, $varf_ft_1_style, 14);
										$pdf->SetFillColor($varf_fc_1_red, $varf_fc_1_green, $varf_fc_1_blue);
										$pdf->SetTextColor($varf_tc_1_red, $varf_tc_1_green, $varf_tc_1_blue);
										$pdf->Cell(75, 5, utf8_decode('D.I.T.'), $varf_cl_1_bo, $varf_cl_1_li, $varf_cl_1_al, $varf_cl_1_fi, $varf_cl_1_lk);
										#--------------------------------------------------------#
										$pdf->Ln(5);
										#--------------------------------------------------------#
										# Interfaz DIT: Titulo General
										$pdf->SetFont($varf_ft_1_family, $varf_ft_1_style, $varf_ft_1_size);
										$pdf->SetFillColor($varf_fc_1_red, $varf_fc_1_green, $varf_fc_1_blue);
										$pdf->SetTextColor($varf_tc_1_red, $varf_tc_1_green, $varf_tc_1_blue);
										$pdf->Cell(75, 5, utf8_decode('DIAGNOSTICO INTEGRAL POR TITULAR'), $varf_cl_1_bo, $varf_cl_1_li, $varf_cl_1_al, $varf_cl_1_fi, $varf_cl_1_lk);
										#--------------------------------------------------------#
										$pdf->Ln(5);
										#--------------------------------------------------------#
										# Interfaz DIT: Titulo General
										$pdf->SetFont($varf_ft_1_family, $varf_ft_1_style, $varf_ft_1_size);
										$pdf->SetFillColor($varf_fc_1_red, $varf_fc_1_green, $varf_fc_1_blue);
										$pdf->SetTextColor($varf_tc_1_red, $varf_tc_1_green, $varf_tc_1_blue);
										$pdf->Cell(75, 5, utf8_decode('INVESTIGACION DE BIENES'), $varf_cl_1_bo, $varf_cl_1_li, $varf_cl_1_al, $varf_cl_1_fi, $varf_cl_1_lk);
										#--------------------------------------------------------#
										$pdf->Image($var_cl_image, 90, 12, 50);
										$pdf->Image('views/backend/images/logo.png', 150, 8, 50);
										#--------------------------------------------------------#
										$pdf->Ln(12);
										#--------------------------------------------------------#
										# Interfaz DIT: Campos Textos
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(38, 5, utf8_decode('Entidad Externa Investigadora'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										$pdf->Cell(44, 5, utf8_decode('GSC OUTSOURCING S.A.S'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										#--------------------------------------------------------#
										# Interfaz DIT: Campos Textos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(25, 5, utf8_decode('FECHA'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										$pdf->Cell(30, 5, $var_cp_date_arrival, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										#--------------------------------------------------------#
										# Interfaz DIT: Campos Textos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(25, 5, utf8_decode('CIUDAD'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										$pdf->Cell(28, 5, utf8_decode('BOGOTA'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										#--------------------------------------------------------#
										$pdf->Ln(6);
										#--------------------------------------------------------#
										# Interfaz DIT: Sub Titulos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
										$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
										$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
										$pdf->Cell(190, 5,utf8_decode( 'INFORMACIÓN PERSONAL'), $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
										#--------------------------------------------------------#
										$pdf->SetTextColor(0, 0, 0);
										$pdf->Ln(6);
										#--------------------------------------------------------#
										# Interfaz DIT: Campos Textos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(25, 5, utf8_decode('NOMBRE'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(85, 5, $var_dm_full_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										#--------------------------------------------------------#
										# Interfaz DIT: Campos Textos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(30, 5, utf8_decode('IDENTIFICACION'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(50, 5, $var_dm_identification, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										#--------------------------------------------------------#
										$pdf->Ln(5);
										#--------------------------------------------------------#
										# Interfaz DIT: Campos Textos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(25, 5, utf8_decode('NRO OBLIGACION'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(45, 5, $var_dm_nro_obligation, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										#--------------------------------------------------------#
										# Interfaz DIT: Campos Textos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(25, 5, utf8_decode('CONSECUTIVO'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(25, 5, $var_dm_consecutive, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										#--------------------------------------------------------#
										# Interfaz DIT: Campos Textos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(25, 5, utf8_decode('CIUDAD'), $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(45, 5, $var_dm_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										#--------------------------------------------------------#
										$pdf->Ln(6);
										#--------------------------------------------------------#
										# Interfaz DIT: Sub Titulos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
										$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
										$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
										$pdf->Cell(190, 5, utf8_decode('INVESTIGACION POR ACTIVIDAD ECONOMICA'), $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
										#--------------------------------------------------------#
										$pdf->SetTextColor(0, 0, 0);
										#--------------------------------------------------------#
										# Recorrer datos para validar si existe
										$var_result_furniture = $var_rst_furniture->fetchAll();
										$var_rst_furniture->closeCursor();
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (false != $var_result_furniture) {
											# Validar si la sentencia query ejecutada es correcta y no falsa
											if (true == $var_dit_furniture) {
												# Recorrer los datos de la consulta de la tabla y encodificarlos
												foreach ($var_dit_furniture as $key => $value) {
													# Imprimir valores recibidos
													$var_fu_id = utf8_decode($value['lbl_azp_ibn_furniture_id_azp_ibn_furniture']);
													$var_fu_address = utf8_decode($value['lbl_azp_ibn_furniture_t_address']);
													$var_fu_business_name = utf8_decode($value['lbl_azp_ibn_furniture_t_business_name']);
													$var_fu_city = utf8_decode($value['lbl_azp_ibn_furniture_t_city']);
													$var_fu_consecutive = utf8_decode($value['lbl_azp_ibn_furniture_t_consecutive']);
													$var_fu_department = utf8_decode($value['lbl_azp_ibn_furniture_t_department']);
													$var_fu_entity = utf8_decode($value['lbl_azp_ibn_furniture_t_entity']);
													$var_fu_full_name = utf8_decode($value['lbl_azp_ibn_furniture_t_full_name']);
													$var_fu_identification = utf8_decode($value['lbl_azp_ibn_furniture_t_identification']);
													$var_fu_municipality = utf8_decode($value['lbl_azp_ibn_furniture_t_municipality']);
													$var_fu_nit = utf8_decode($value['lbl_azp_ibn_furniture_t_nit']);
													$var_fu_observation[$var_fu_id] = utf8_decode($value['lbl_azp_ibn_furniture_t_concept']);
													$var_fu_phone = utf8_decode($value['lbl_azp_ibn_furniture_t_phone']);
													//$var_fu_salary = utf8_decode($value['lbl_azp_ibn_furniture_t_salary']);
													$var_fu_salary = utf8_decode($value['lbl_azp_ibn_rank_t_name']);
													$var_fu_viable_causal = utf8_decode($value['lbl_azp_ibn_furniture_t_viable_causal']);
													$var_fu_well_option = utf8_decode($value['lbl_azp_ibn_furniture_t_well_option']);
													$var_fu_well_viable = utf8_decode($value['lbl_azp_ibn_furniture_t_well_viable']);
													$var_fu_type_contributor = utf8_decode($value['lbl_azp_ibn_type_contributor_t_name']);
													#--------------------------------------------------------#
													$pdf->Ln(6);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'NIT', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(45, 5, $var_fu_nit, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'ORGANIZACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(40, 5, $var_fu_business_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'CIUDAD', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(45, 5, $var_fu_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'DEPARTAMENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(45, 5, $var_fu_department, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'MUNICIPIO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(40, 5, $var_fu_municipality, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'DIRECCION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(45, 5, $var_fu_address, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'TELEFONO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(45, 5, $var_fu_phone, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'SALARIO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(40, 5, $var_fu_salary, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'TIPO DE COTIZANTE', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(45, 5, $var_fu_type_contributor, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#--------------------------------------------------------#
												}
											} else {
												$pdf->Ln(6);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICO ACTIVIDAD LABORAL RELACIONADA AL TITULAR',
													$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											}
										} else {
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICO ACTIVIDAD LABORAL RELACIONADA AL TITULAR',
												$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										}
										#--------------------------------------------------------#
										$pdf->Ln(6);
										#--------------------------------------------------------#
										# Interfaz DIT: Sub Titulos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
										$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
										$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
										$pdf->Cell(190, 5, 'INVESTIGACION POR INMUEBLE', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
										#--------------------------------------------------------#
										$pdf->SetTextColor(0, 0, 0);
										#--------------------------------------------------------#
										# Recorrer datos para validar si existe
										$var_result_property = $var_rst_property->fetchAll();
										$var_rst_property->closeCursor();
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (false != $var_result_property) {
											# Validar si la sentencia query ejecutada es correcta y no falsa
											if (true == $var_dit_property) {
												# Recorrer los datos de la consulta de la tabla y encodificarlos
												foreach ($var_dit_property as $key => $value) {
													# Imprimir valores recibidos
													$var_pr_id = utf8_decode($value['lbl_azp_ibn_property_id_azp_ibn_property']);
													$var_pr_address = utf8_decode($value['lbl_azp_ibn_property_t_address']);
													$var_pr_area = utf8_decode($value['lbl_azp_ibn_property_t_area']);
													$var_pr_assessment = utf8_decode($value['lbl_azp_ibn_property_t_assessment']);
													$var_pr_causal_feasibility = utf8_decode($value['lbl_azp_ibn_property_t_causal_feasibility']);
													$var_pr_consecutive = utf8_decode($value['lbl_azp_ibn_property_t_consecutive']);
													$var_pr_department = utf8_decode($value['lbl_azp_ibn_property_t_department']);
													$var_pr_full_name = utf8_decode($value['lbl_azp_ibn_property_t_full_name']);
													$var_pr_identification = utf8_decode($value['lbl_azp_ibn_property_t_identification']);
													$var_pr_market_value = utf8_decode($value['lbl_azp_ibn_property_t_market_value']);
													$var_pr_municipality = utf8_decode($value['lbl_azp_ibn_property_t_municipality']);
													$var_pr_nro_registration = utf8_decode($value['lbl_azp_ibn_property_t_nro_registration']);
													$var_pr_observation[$var_pr_id] = utf8_decode($value['lbl_azp_ibn_property_t_concept']);
													$var_pr_ownership = utf8_decode($value['lbl_azp_ibn_property_t_ownership']);
													$var_pr_purchase_annotation = utf8_decode($value['lbl_azp_ibn_property_t_purchase_annotation']);
													$var_pr_viable = utf8_decode($value['lbl_azp_ibn_property_t_viable']);
													$var_pr_well_viable = utf8_decode($value['lbl_azp_ibn_property_t_well_viable']);
													#--------------------------------------------------------#
													$pdf->Ln(6);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(25, 15, 'INMUEBLE ', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'CIUDAD', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(55, 5, $var_pr_municipality, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'DIRECCION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(70, 5, $var_pr_address, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													$pdf->SetX(35);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'DEPARTAMENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(60, 5, $var_pr_department, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'MATRICULA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(65, 5, $var_pr_nro_registration, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													$pdf->SetX(35);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'LIMITACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(145, 5, $var_pr_assessment, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#--------------------------------------------------------#
												}
											} else {
												$pdf->Ln(6);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON BIENES INMUEBLES A NOMBRE DEL TITULAR',
													$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											}
										} else {
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON BIENES INMUEBLES A NOMBRE DEL TITULAR',
												$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										}
										#--------------------------------------------------------#
										$pdf->Ln(6);
										#--------------------------------------------------------#
										# Interfaz DIT: Sub Titulos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
										$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
										$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
										$pdf->Cell(190, 5, 'INVESTIGACION POR VEHICULO', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
										#--------------------------------------------------------#
										$pdf->SetTextColor(0, 0, 0);
										#--------------------------------------------------------#
										# Recorrer datos para validar si existe
										$var_result_vehicle = $var_rst_vehicle->fetchAll();
										$var_rst_vehicle->closeCursor();
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (false != $var_result_vehicle) {
											# Validar si la sentencia query ejecutada es correcta y no falsa
											if (true == $var_dit_vehicle) {
												# Recorrer los datos de la consulta de la tabla y encodificarlos
												foreach ($var_dit_vehicle as $key => $value) {
													# Imprimir valores recibidos
													$var_vh_id = utf8_decode($value['lbl_azp_ibn_vehicle_id_azp_ibn_vehicle']);
													$var_vh_assessment = utf8_decode($value['lbl_azp_ibn_vehicle_t_assessment']);
													$var_vh_causal_feasibility = utf8_decode($value['lbl_azp_ibn_vehicle_t_causal_feasibility']);
													$var_vh_city = utf8_decode($value['lbl_azp_ibn_vehicle_t_city']);
													$var_vh_class = utf8_decode($value['lbl_azp_ibn_vehicle_t_class']);
													$var_vh_color = utf8_decode($value['lbl_azp_ibn_vehicle_t_color']);
													$var_vh_consecutive = utf8_decode($value['lbl_azp_ibn_vehicle_t_consecutive']);
													$var_vh_full_name = utf8_decode($value['lbl_azp_ibn_vehicle_t_full_name']);
													$var_vh_identification = utf8_decode($value['lbl_azp_ibn_vehicle_t_identification']);
													$var_vh_line = utf8_decode($value['lbl_azp_ibn_vehicle_t_line']);
													$var_vh_make_camera = utf8_decode($value['lbl_azp_ibn_vehicle_t_make_camera']);
													$var_vh_mark = utf8_decode($value['lbl_azp_ibn_vehicle_t_mark']);
													$var_vh_model = utf8_decode($value['lbl_azp_ibn_vehicle_t_model']);
													$var_vh_observation[$var_vh_id] = utf8_decode($value['lbl_azp_ibn_vehicle_t_concept']);
													$var_vh_plaque = utf8_decode($value['lbl_azp_ibn_vehicle_t_plaque']);
													$var_vh_service = utf8_decode($value['lbl_azp_ibn_vehicle_t_service']);
													$var_vh_value_assessment = utf8_decode($value['lbl_azp_ibn_vehicle_t_value_assessment']);
													$var_vh_value_vehicle = utf8_decode($value['lbl_azp_ibn_vehicle_t_value_vehicle']);
													$var_vh_viable = utf8_decode($value['lbl_azp_ibn_vehicle_t_viable']);
													$var_vh_well_viable = utf8_decode($value['lbl_azp_ibn_vehicle_t_well_viable']);
													#--------------------------------------------------------#
													$pdf->Ln(6);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(25, 15, 'VEHICULO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'MARCA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(55, 5, $var_vh_mark, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'MODELO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(70, 5, $var_vh_model, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													$pdf->SetX(35);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(13, 5, 'PLACA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(41, 5, $var_vh_plaque, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(13, 5, 'CLASE', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(41, 5, $var_vh_class, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(14, 5, 'UBICACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(43, 5, $var_vh_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													$pdf->SetX(35);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'LIMITACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(145, 5, $var_vh_assessment, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#--------------------------------------------------------#
												}
											} else {
												$pdf->Ln(6);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON VEHICULOS A NOMBRE DEL TITULAR',
													$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											}
										} else {
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON VEHICULOS A NOMBRE DEL TITULAR',
												$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										}
										#--------------------------------------------------------#
										$pdf->Ln(6);
										#--------------------------------------------------------#
										# Interfaz DIT: Sub Titulos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
										$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
										$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
										$pdf->Cell(190, 5, 'INVESTIGACION POR ESTABLECIMIENTO DE COMERCIO', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
										#--------------------------------------------------------#
										$pdf->SetTextColor(0, 0, 0);
										#--------------------------------------------------------#
										# Recorrer datos para validar si existe
										$var_result_camera = $var_rst_camera->fetchAll();
										$var_rst_camera->closeCursor();
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (false != $var_result_camera) {
											# Validar si la sentencia query ejecutada es correcta y no falsa
											if (true == $var_dit_camera) {
												# Recorrer los datos de la consulta de la tabla y encodificarlos
												foreach ($var_dit_camera as $key => $value) {
													# Imprimir valores recibidos
													$var_cm_id = utf8_decode($value['lbl_azp_ibn_camera_id_azp_ibn_camera']);
													$var_cm_act_economic = utf8_decode($value['lbl_azp_ibn_camera_t_act_economic']);
													$var_cm_address = utf8_decode($value['lbl_azp_ibn_camera_t_address']);
													$var_cm_assessment = utf8_decode($value['lbl_azp_ibn_camera_t_assessment']);
													$var_cm_business_name = utf8_decode($value['lbl_azp_ibn_camera_t_business_name']);
													$var_cm_causal_feasibility = utf8_decode($value['lbl_azp_ibn_camera_t_causal_feasibility']);
													$var_cm_city = utf8_decode($value['lbl_azp_ibn_camera_t_city']);
													$var_cm_consecutive = utf8_decode($value['lbl_azp_ibn_camera_t_consecutive']);
													$var_cm_department = utf8_decode($value['lbl_azp_ibn_camera_t_department']);
													$var_cm_establishment = utf8_decode($value['lbl_azp_ibn_camera_t_establishment']);
													$var_cm_full_name = utf8_decode($value['lbl_azp_ibn_camera_t_full_name']);
													$var_cm_identification = utf8_decode($value['lbl_azp_ibn_camera_t_identification']);
													$var_cm_legal_representative = utf8_decode($value['lbl_azp_ibn_camera_t_legal_representative']);
													$var_cm_legal_rp_certificate = utf8_decode($value['lbl_azp_ibn_camera_t_legal_rp_certificate']);
													$var_cm_municipality = utf8_decode($value['lbl_azp_ibn_camera_t_municipality']);
													$var_cm_nit = utf8_decode($value['lbl_azp_ibn_camera_t_nit']);
													$var_cm_nro_registration = utf8_decode($value['lbl_azp_ibn_camera_t_nro_registration']);
													$var_cm_observation[$var_cm_id] = utf8_decode($value['lbl_azp_ibn_camera_t_concept']);
													$var_cm_phone = utf8_decode($value['lbl_azp_ibn_camera_t_phone']);
													$var_cm_renewal_date = utf8_decode($value['lbl_azp_ibn_camera_t_renewal_date']);
													$var_cm_rup = utf8_decode($value['lbl_azp_ibn_camera_t_rup']);
													$var_cm_total_active = utf8_decode($value['lbl_azp_ibn_camera_t_total_active']);
													$var_cm_type_company = utf8_decode($value['lbl_azp_ibn_camera_t_type_company']);
													$var_cm_type_organization = utf8_decode($value['lbl_azp_ibn_camera_t_type_organization']);
													$var_cm_viable = utf8_decode($value['lbl_azp_ibn_camera_t_viable']);
													$var_cm_well_viable = utf8_decode($value['lbl_azp_ibn_camera_t_well_viable']);
													$var_cm_year = utf8_decode($value['lbl_azp_ibn_camera_t_year']);
													#--------------------------------------------------------#
													$pdf->Ln(6);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'RAZON SOCIAL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(75, 5, $var_cm_business_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'NIT', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(75, 5, $var_cm_nit, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'ESTABLECIMIENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(170, 5, $var_cm_establishment, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'TELEFONO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(45, 5, $var_cm_phone, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'CIUDAD', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(40, 5, $var_cm_city, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'DEPARTAMENTO', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(45, 5, $var_cm_department, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(30, 5, 'MATRICULA MERCANTIL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(65, 5, $var_cm_nro_registration, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'ADICIONALES', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(75, 5, '', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(25, 5, 'CEDULA REPR LEGAL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(70, 5, $var_cm_legal_rp_certificate, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(25, 5, 'NOMBRE REPR LEGAL', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(70, 5, $var_cm_legal_representative, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'TIPO ORGANIZACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(45, 5, $var_cm_type_organization, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'FECHA RENOVACION', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(40, 5, $var_cm_renewal_date, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'RUP', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(45, 5, $var_cm_rup, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#--------------------------------------------------------#
												}
											} else {
												$pdf->Ln(6);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON CAMARAS A NOMBRE DEL TITULAR',
													$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											}
										} else {
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON CAMARAS A NOMBRE DEL TITULAR',
												$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										}
										#--------------------------------------------------------#
										$pdf->Ln(6);
										#--------------------------------------------------------#
										# Interfaz DIT: Sub Titulos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
										$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
										$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
										$pdf->Cell(190, 5, 'INVESTIGACION POR GARANTIAS MOBILIARIAS', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
										#--------------------------------------------------------#
										$pdf->SetTextColor(0, 0, 0);
										#--------------------------------------------------------#
										# Recorrer datos para validar si existe
										$var_result_warranty = $var_rst_warranty->fetchAll();
										$var_rst_warranty->closeCursor();
										# Validar si la sentencia query ejecutada es correcta y no falsa
										if (false != $var_result_warranty) {
											# Validar si la sentencia query ejecutada es correcta y no falsa
											if (true == $var_dit_warranty) {
												# Recorrer los datos de la consulta de la tabla y encodificarlos
												foreach ($var_dit_warranty as $key => $value) {
													# Imprimir valores recibidos
													$var_wr_id = utf8_decode($value['lbl_azp_ibn_warranty_id_azp_ibn_warranty']);
													$var_wr_consecutive = utf8_decode($value['lbl_azp_ibn_warranty_t_consecutive']);
													$var_wr_creditor = utf8_decode($value['lbl_azp_ibn_warranty_t_creditor']);
													$var_wr_date = utf8_decode($value['lbl_azp_ibn_warranty_t_date']);
													$var_wr_full_name = utf8_decode($value['lbl_azp_ibn_warranty_t_full_name']);
													$var_wr_identification = utf8_decode($value['lbl_azp_ibn_warranty_t_identification']);
													$var_wr_observation[$var_wr_id] = utf8_decode($value['lbl_azp_ibn_warranty_t_concept']);
													$var_wr_well_detail = utf8_decode($value['lbl_azp_ibn_warranty_t_well_detail']);
													$var_wr_well_name = utf8_decode($value['lbl_azp_ibn_warranty_t_well_name']);
													$var_wr_value = utf8_decode($value['lbl_azp_ibn_warranty_t_value']);
													#--------------------------------------------------------#
													$pdf->Ln(6);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'ACREEDOR', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(75, 5, $var_wr_creditor, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'VALOR', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(75, 5, $var_wr_value, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													$pdf->Ln(5);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'BIEN', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(75, 5, $var_wr_well_name, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
													# Interfaz DIT: Campos Textos
													#------------------------------#
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(20, 5, 'FECHA', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
													$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
													$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
													$pdf->Cell(75, 5, $var_wr_date, $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
													#------------------------------#
												}
											} else {
												$pdf->Ln(6);
												#------------------------------#
												# Interfaz DIT: Campos Textos
												#------------------------------#
												$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
												$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
												$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
												$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON GARANTIAS MOBILIARIAS A NOMBRE DEL TITULAR',
													$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
											}
										} else {
											$pdf->Ln(6);
											#------------------------------#
											# Interfaz DIT: Campos Textos
											#------------------------------#
											$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
											$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
											$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
											$pdf->Cell(190, 5, 'EN INVESTIGACION REALIZADA NO SE IDENTIFICARON GARANTIAS MOBILIARIAS A NOMBRE DEL TITULAR',
												$varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										}
										#--------------------------------------------------------#
										$pdf->Ln(6);
										#--------------------------------------------------------#
										# Interfaz DIT: Sub Titulos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_2_family, $varf_ft_2_style, $varf_ft_2_size);
										$pdf->SetFillColor($varf_fc_2_red, $varf_fc_2_green, $varf_fc_2_blue);
										$pdf->SetTextColor($varf_tc_2_red, $varf_tc_2_green, $varf_tc_2_blue);
										$pdf->Cell(190, 5, 'DIT: DIAGNOSTICO INTEGRAL POR TITULAR', $varf_cl_2_bo, $varf_cl_2_li, $varf_cl_2_al, $varf_cl_2_fi, $varf_cl_2_lk);
										#--------------------------------------------------------#
										$pdf->SetTextColor(0, 0, 0);
										$pdf->Ln(6);
										#--------------------------------------------------------#
										$empty_pr_observation = implode(',', $var_pr_observation);
										$empty_vh_observation = implode(',', $var_vh_observation);
										$empty_cm_observation = implode(',', $var_cm_observation);
										$empty_fu_observation = implode(',', $var_fu_observation);
										$empty_wr_observation = implode(',', $var_wr_observation);
										#--------------------------------------------------------#
										# Interfaz DIT: Campos Textos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->MultiCell(190, 4, 'INMUEBLE: ' . $empty_pr_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
										$pdf->MultiCell(190, 4, 'VEHICULOS: ' . $empty_vh_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
										$pdf->MultiCell(190, 4, 'CAMARA DE COMERCIO:' . $empty_cm_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
										$pdf->MultiCell(190, 4, 'SALARIO:' . $empty_fu_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
										$pdf->MultiCell(190, 4, 'GARANTIAS MOBILIARIAS:' . $empty_wr_observation, $varf_cl_3_bo, 'J', $varf_cl_3_fi);
										#--------------------------------------------------------#
										$pdf->Ln(2);
										#--------------------------------------------------------#
										# Interfaz DIT: Campos Textos
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(70, 5, 'VIABILIDAD PARA JUDICIALIZAR ', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										#--------------------------------------------------------#
										$pdf->SetFont($varf_ft_3_family, $varf_ft_3_style, $varf_ft_3_size);
										$pdf->SetFillColor($varf_fc_3_red, $varf_fc_3_green, $varf_fc_3_blue);
										$pdf->SetTextColor($varf_tc_3_red, $varf_tc_3_green, $varf_tc_3_blue);
										$pdf->Cell(120, 5, '', $varf_cl_3_bo, $varf_cl_3_li, $varf_cl_3_al, $varf_cl_3_fi, $varf_cl_3_lk);
										#--------------------------------------------------------#
										$pdf->Ln(6);
										#--------------------------------------------------------#
										$pdf->Image('views/backend/images/firm.png');
										#--------------------------------------------------------#
										$pdf->Ln(3);
										#--------------------------------------------------------#
										$pdf->SetFont('Arial', 'B', 7);
										$pdf->Cell(190, 5, 'MARGARITA GIRALDO DE SANCHEZ', 0, 0,);
										#--------------------------------------------------------#
										$pdf->Ln(3);
										#--------------------------------------------------------#
										$pdf->SetFont('Arial', 'B', 7);
										$pdf->Cell(190, 5, 'DIRECTORA PROCESOS', 0, 0,);
										#--------------------------------------------------------#
										$pdf->Ln(3);
										#--------------------------------------------------------#
										$pdf->SetFont('Arial', 'B', 7);
										$pdf->Cell(190, 5, 'REVISION GSC OUTSOURCING S.A.S.', 0, 0,);
										#--------------------------------------------------------#
										# Ruta de la carpeta con cedulas
										$var_route_folder = 'systemfiles/filesproject/azp_ibn_control_panel/' . $var_dm_control_panel . '/archive/';
										# Creacion de carpetas en el desarrollo
										Files::create_dir($var_route_folder, 0777);
										# Dar permisos a la carpeta y archivo
										chmod($var_route_folder, 0777);
										#--------------------------------------------------------#
										$var_w_document = 'DIT' . '_' . $var_dm_identification . '.pdf';
										$var_w_error = '0';
										$var_w_folder = 'azp_ibn_control_panel/' . $var_dm_control_panel . '/archive/';
										$var_w_name = DATE_NUMBER . ' ' . HOUR_NUMBER . '.pdf';
										$var_w_route = '../systemfiles/filesproject/';
										$var_w_size = '0';
										$var_w_tmp_name = '0';
										$var_w_type = 'application/pdf';
										#--------------------------------------------------------#
										# Dar permisos a la carpeta y archivo
										chmod(str_replace('../', '', $var_w_route) . $var_w_folder, 0777);
										#--------------------------------------------------------#
										$var_route_pdf = str_replace('../', '', $var_w_route) . $var_w_folder . $var_w_document;
										$pdf->Output('F', $var_route_pdf, true);
										#--------------------------------------------------------#
										# Dar permisos a la carpeta y archivo
										chmod($var_route_pdf, 0777);
										#--------------------------------------------------------#
										$var_data = array(
											'lbl_id' => $var_dm_id,
											//'lbl_identification' => $var_dm_identification,
											'lbl_document' => $var_w_document,
											'lbl_error' => $var_w_error,
											'lbl_folder' => $var_w_folder,
											'lbl_name' => $var_w_name,
											'lbl_route' => $var_w_route,
											'lbl_size' => $var_w_size,
											'lbl_tmp_name' => $var_w_tmp_name,
											'lbl_type' => $var_w_type,
										);
										$var_m_zv_dashboard->sql_azp_ibn_dit_data_main_dit_all_pdf($var_data, $var_dm_control_panel);
									
								}
							}
							$var_m_zv_dashboard->sql_azp_ibn_dit_data_main_dit_all_zip($var_dm_control_panel);
						}
						# Finalizar el codigo
						exit();
						break;
					case 'cparchive':
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_ver = $var_m_zv_dashboard->sql_controller_dit_archive();
						# Recorrer los datos de la consulta de la tabla para validacion de existencia
						if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
						# Validacion de si existe mas de un dato para encodificarlos
						if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_dit_archive();
							# Imprimir una variable adicional
							echo $var_start = '{"status":true,"data":';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
							# Imprimir una variable adicional
							echo $var_end = '}';
						}
						break;





					case 'cpdwimageall':
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_m_zv_dashboard->sql_azp_ibn_control_panel_image_all();
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_ver = $var_m_zv_dashboard->sql_controller_file_zip();
						# Recorrer los datos de la consulta de la tabla para validacion de existencia
						if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
						# Validacion de si existe mas de un dato para encodificarlos
						if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_file_zip();
							# Imprimir una variable adicional
							echo $var_start = '{"status":true,"data":';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
							# Imprimir una variable adicional
							echo $var_end = '}';
						}
						break;
					case 'cpreportgeneral':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_report_general();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cpgetclient':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->get_sql_azp_ibn_sector();
							# Imprimir valores adicionales
							echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql['lbl_azp_ibn_client_id_azp_ibn_client'] . '">';
									# Imprimir valores recibidos
									echo $value_sql['lbl_azp_ibn_client_t_name'];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpgetclienttwo':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->get_sql_azp_ibn_sector_two();
							# Imprimir valores adicionales
							echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql['lbl_azp_ibn_client_id_azp_ibn_client'] . '">';
									# Imprimir valores recibidos
									echo $value_sql['lbl_azp_ibn_client_t_name'];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpgpviclient':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_tc_ibn_control_viability_base();
							# Imprimir valores adicionales
							echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql['lbl_azp_ibn_control_panel_id_azp_ibn_control_panel'] . '">';
									# Imprimir valores recibidos
									echo $value_sql['lbl_azp_ibn_control_panel_t_code_research'];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpgppoclient':
						# Control para la validacion de valores get
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_tc_ibn_control_posession_base();
							# Imprimir valores adicionales
							echo '<option value="">Seleccionar</option>';
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key_sql => $value_sql) {
								# Imprimir valores recibidos
								echo '<option value="' . $value_sql['lbl_azp_ibn_control_panel_id_azp_ibn_control_panel'] . '">';
									# Imprimir valores recibidos
									echo $value_sql['lbl_azp_ibn_control_panel_t_code_research'];
								# Imprimir valores recibidos
								echo '</option>';
							}
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpgpvigraphic':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_tc_ibn_control_viability_graphic();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array(ucwords(strtolower($value['lbl_name'])), $value['lbl_count'])); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;
					case 'cpgppographic':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_tc_ibn_control_posession_graphic();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) {
							# Asignacion de valores a un array
							array_push($arrayName, array('Camaras', $value['lbl_camera'], $value['lbl_camera'],));
							array_push($arrayName, array('Salarios', $value['lbl_furniture'], $value['lbl_furniture'],));
							array_push($arrayName, array('Inmuebles', $value['lbl_property'], $value['lbl_property'],));
							array_push($arrayName, array('Vehiculos', $value['lbl_vehicle'], $value['lbl_vehicle'],));
							array_push($arrayName, array('Garantias', $value['lbl_warranty'], $value['lbl_warranty'],));
						}
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;






					case 'gscdfstate':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_tc_gsc_request_graphic_state();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array(ucwords(strtolower($value['lbl_name'])), $value['lbl_count'])); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;
					case 'gscgpgraphic':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_tc_gsc_request_graphic_state();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array(ucwords(strtolower($value['lbl_name'])), $value['lbl_count'])); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;





					case 'cpdfvigraphic':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_tc_ibn_control_viability_graphic();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array(ucwords(strtolower($value['lbl_name'])), $value['lbl_count'])); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;
					case 'cpdfpographic':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_tc_ibn_control_posession_graphic();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) {
							# Asignacion de valores a un array
							array_push($arrayName, array('Camaras', $value['lbl_camera'], $value['lbl_camera'],));
							array_push($arrayName, array('Salarios', $value['lbl_furniture'], $value['lbl_furniture'],));
							array_push($arrayName, array('Inmuebles', $value['lbl_property'], $value['lbl_property'],));
							array_push($arrayName, array('Vehiculos', $value['lbl_vehicle'], $value['lbl_vehicle'],));
							array_push($arrayName, array('Garantias', $value['lbl_warranty'], $value['lbl_warranty'],));
						}
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;

						
					case 'cprpgantt':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_tc_ibn_report_gantt();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cpclient':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_client();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cpclienttwo':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_client_two();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cpread':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_count();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_finish();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_read();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cpinfo':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_information_read();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cpimagespress':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_imagespress_read();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cpidetail':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_zv_dashboard->sql_controller_ibn_information_detail();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_zv_dashboard->sql_controller_ibn_information_detail();
								# Imprimir una variable adicional
								echo $var_start = '{"status":true,"data":';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
								# Imprimir una variable adicional
								echo $var_end = '}';
							}
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpimgdetail':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_zv_dashboard->sql_controller_ibn_imagespress_detail();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_zv_dashboard->sql_controller_ibn_imagespress_detail();
								# Imprimir una variable adicional
								echo $var_start = '{"status":true,"data":';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
								# Imprimir una variable adicional
								echo $var_end = '}';
							}
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpcdetail':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_zv_dashboard->sql_controller_ibn_information_client();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_zv_dashboard->sql_controller_ibn_information_client();
								# Imprimir una variable adicional
								echo $var_start = '{"status":true,"data":';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
								# Imprimir una variable adicional
								echo $var_end = '}';
							}
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpgscdetail':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_zv_dashboard->sql_controller_gsc_information_client();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_zv_dashboard->sql_controller_gsc_information_client();
								# Imprimir una variable adicional
								echo $var_start = '{"status":true,"data":';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
								# Imprimir una variable adicional
								echo $var_end = '}';
							}
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpcrtdetail':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_zv_dashboard->sql_controller_crt_information_client();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_zv_dashboard->sql_controller_crt_information_client();
								# Imprimir una variable adicional
								echo $var_start = '{"status":true,"data":';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
								# Imprimir una variable adicional
								echo $var_end = '}';
							}
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpcimages':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_zv_dashboard->sql_controller_ibn_imagespress_client();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_zv_dashboard->sql_controller_ibn_imagespress_client();
								# Imprimir una variable adicional
								echo $var_start = '{"status":true,"data":';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
								# Imprimir una variable adicional
								echo $var_end = '}';
							}
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'clread':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_count();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_finish();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_individual();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'clall':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_count();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_finish();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_all();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'clidntf':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_count();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_finish();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_idntf();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cldate':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_count();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_finish();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_date();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'clevaluation':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_evaluation();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cpgantt':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_format_gantt_read();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cpdata':
						# Control para validar el id
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_zv_dashboard->sql_tc_ibn_report_policy_effective();
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_zv_dashboard->sql_tc_ibn_report_policy_viability();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_viability_individual();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_viability_general();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_effective_individual();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_effective_general();
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_ibn_data_main();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpdetail':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_zv_dashboard->sql_controller_ibn_control_panel_detail();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_zv_dashboard->sql_controller_ibn_control_panel_detail();
								# Imprimir una variable adicional
								echo $var_start = '{"status":true,"data":';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
								# Imprimir una variable adicional
								echo $var_end = '}';
							}
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpfound':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_ibn_data_found();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpgeneral':
						# Control para validar el id
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_zv_dashboard->sql_tc_ibn_report_policy_effective();
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_zv_dashboard->sql_tc_ibn_report_policy_viability();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_viability_general();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_viability_individual();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_effective_general();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_effective_individual();
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_zv_dashboard->sql_dsh_azp_ibn_control_panel_report_general();
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_ibn_data_report();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpunion':
						# Definir una variable con un valor
						$var_assigned = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_ibn_data_union();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'detail':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_zv_dashboard->sql_controller_detail();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_zv_dashboard->sql_controller_detail();
								# Imprimir una variable adicional
								echo $var_start = '{"status":true,"data":';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
								# Imprimir una variable adicional
								echo $var_end = '}';
							}
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace($var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'reportfollowemail':
						if (isset($_GET['field_fm_date_sice']) && isset($_GET['field_fm_date_until'])) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_report_gsc_follow_email();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'main/error/');
							# Detener la ejecucion
							exit();
						}
						# Finalizar el codigo
						exit();
						break;
					case 'reportgscstate':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_report_gsc_phase();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'reportgscdaily':
						if (isset($_GET['field_rd_date_sice']) && isset($_GET['field_rd_date_until'])) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_report_gsc_daily();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'main/error/');
							# Detener la ejecucion
							exit();
						}
						# Finalizar el codigo
						exit();
					case 'reportgscrequest':
						if (isset($_GET['field_rf_date_sice']) && isset($_GET['field_rf_date_until'])) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_report_gsc_request();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'main/error/');
							# Detener la ejecucion
							exit();
						}
						# Finalizar el codigo
						exit();
						break;
					case 'reportgscfull':
						if (isset($_GET['field_rf_date_sice']) && isset($_GET['field_rf_date_until'])) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_report_gsc_full();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'main/error/');
							# Detener la ejecucion
							exit();
						}
						# Finalizar el codigo
						exit();
						break;
					case 'reportfilterfull':
						if (isset($_GET['field_rf_filter'])) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_report_filter();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'main/error/');
							# Detener la ejecucion
							exit();
						}
						# Finalizar el codigo
						exit();
						break;
					case 'reportcrtclientphase':
						if (isset($_GET['field_date_sice']) && isset($_GET['field_date_until'])) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_report_crt_client_phase();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'main/error/');
							# Detener la ejecucion
							exit();
						}
						# Finalizar el codigo
						exit();
						break;
					case 'reportcrtbinnacle':
						if (isset($_GET['field_date_binnacle'])) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$variable = $var_m_zv_dashboard->sql_controller_report_crt_binnacle();
							# Imprimir una variable adicional
							echo $var_start = '{"data":';
							# Valores del array vacios
							$arrayName = array();
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($variable as $key => $value) { $arrayName[] = $value; }
							# Encodificar el ultimo resultado sin añadir una coma
							echo json_encode($arrayName);
							# Imprimir una variable adicional
							echo $var_end = '}';
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'main/error/');
							# Detener la ejecucion
							exit();
						}
						# Finalizar el codigo
						exit();
						break;
					case 'ibnclient':
						# Cargar plantilla
						echo $this->template->render('backend/dashboard/ibnclient', array(
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_gsc_phase_name' => $var_m_azp_gsc_phase->sql_controller_read(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_client_data' => $var_m_zv_dashboard->sql_controller_report_gsc_client(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_client_label' => $var_m_zv_dashboard->sql_controller_report_gsc_client(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_phase_data' => $var_m_zv_dashboard->sql_controller_report_gsc_phase(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_phase_label' => $var_m_zv_dashboard->sql_controller_report_gsc_phase(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_sql_select_tc_azp_ibn_client' => $var_m_zv_dashboard->sql_select_tc_azp_ibn_client(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_sql_select_tc_azp_ibn_sector' => $var_m_zv_dashboard->sql_select_tc_azp_ibn_sector(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_sql_select_tc_azp_ibn_sector_two' => $var_m_zv_dashboard->sql_select_tc_azp_ibn_sector(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_ibn_control_viability_client' => $var_m_zv_dashboard->sql_tc_ibn_control_viability_client(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_ibn_control_viability_base' => $var_m_zv_dashboard->sql_tc_ibn_control_viability_base(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_ibn_control_posession_client' => $var_m_zv_dashboard->sql_tc_ibn_control_posession_client(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_ibn_control_posession_base' => $var_m_zv_dashboard->sql_tc_ibn_control_posession_base(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_ibn_control_viability_code' => $var_m_zv_dashboard->sql_tc_ibn_control_viability_code(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_ibn_control_ultime_base' => $var_m_zv_dashboard->sql_tc_ibn_control_ultime_base(),

							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_gsc_request_ultime_base' => $var_m_zv_dashboard->sql_tc_gsc_request_ultime_base(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_gsc_request_code' => $var_m_zv_dashboard->sql_tc_gsc_request_code(),

							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_gsc_request_ultime_causal' => $var_m_zv_dashboard->sql_tc_gsc_request_ultime_causal(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_gsc_request_causal' => $var_m_zv_dashboard->sql_tc_gsc_request_causal(),

							# Consultar registros de la tabla por medio del modelo instanciado
							'df_select_tc_azp_ibn_image' => $var_m_zv_dashboard->sql_select_tc_azp_ibn_image(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'var_permits_role' => $result_permits_role
						));
						# Finalizar el codigo
						exit();
						break;
					case 'crtclient':
						# Cargar plantilla
						echo $this->template->render('backend/dashboard/crtclient', array(
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_azp_crt_request_type' => $var_m_zv_dashboard->sql_azp_crt_request_type(),
							# Consultar registros de la tabla por medio del modelo instanciado
							//'df_crt_request_ultime' => $var_m_zv_dashboard->sql_controller_crt_rp_ultime(),
							# Consultar registros de la tabla por medio del modelo instanciado
							//'df_crt_request_base' => $var_m_zv_dashboard->sql_controller_crt_rp_base(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_azp_client_image' => $var_m_zv_dashboard->sql_select_tc_azp_client_image(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'var_permits_role' => $result_permits_role,
							# Cargar el controlador actual en una variable y ser declarada
							'df_var_controller' => $var_controller,
						));
						# Finalizar el codigo
						exit();
						break;
					case 'crtidntf':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_crt_idntf();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						# Romper el caso
						break;
					case 'crtbase':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_crt_base();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						# Romper el caso
						break;
					case 'gscclient':
						# Cargar plantilla
						echo $this->template->render('backend/dashboard/gscclient', array(
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_gsc_request_ultime' => $var_m_zv_dashboard->sql_controller_gsc_rp_ultime(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_gsc_request_base' => $var_m_zv_dashboard->sql_controller_gsc_rp_base(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_tc_azp_client_image' => $var_m_zv_dashboard->sql_select_tc_azp_client_image(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'var_permits_role' => $result_permits_role,
							# Cargar el controlador actual en una variable y ser declarada
							'df_var_controller' => $var_controller,
						));
						# Finalizar el codigo
						exit();
						break;
					case 'gscidntf':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_idntf();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						# Romper el caso
						break;
					case 'gscbase':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_base();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						# Romper el caso
						break;
					case 'gscrpgestionname':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_gestion();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array($value['lbl_azp_gsc_state_t_name'],),); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Finalizar el codigo
						exit();
						# Romper el caso
						break;
					case 'gscrpgestiondata':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_gestion();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array(ucwords(strtolower($value['lbl_azp_gsc_state_t_name'])), $value['lbl_azp_gsc_request_count'])); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;
					case 'gscrpmonthname':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_montlhy();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array($value['lbl_azp_gsc_request_t_shipping_date'],),); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Finalizar el codigo
						exit();
						# Romper el caso
						break;
					case 'gscrpmonthdata':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_montlhy();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array(ucwords(strtolower($value['lbl_azp_gsc_request_t_shipping_date'])), $value['lbl_azp_gsc_request_t_number_count'])); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;
					case 'gscrpeffecty':
						# Valores del array vacios
						$arrayName = array();
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_effecty();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array('Entregados', $value['lbl_azp_gsc_request_t_number_count'], $value['lbl_azp_gsc_request_t_number_count'],)); }
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_total();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array('Solicitado', $value['lbl_azp_gsc_request_t_number_count'], $value['lbl_azp_gsc_request_t_number_count'],)); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;
					case 'gscrptffecty':
						$arrayName = array(); $var_total = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						/*$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_total();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $var_total = $value['lbl_azp_gsc_request_t_number_count']; }

						//echo $var_total;

						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_effecty();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array('Entregados', $var_total, $value['lbl_azp_gsc_request_t_number_count'],)); }*/


						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_effecty();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array('Entregados', $value['lbl_azp_gsc_request_t_number_count'],)); }
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_total();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array('Solicitado', $value['lbl_azp_gsc_request_t_number_count'],)); }

						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_effecty();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array('Entregados', 40,)); }
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_gsc_rp_total();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName, array('Solicitado', 60,)); }



						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;
					case 'main':
						$var_count = 0;
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_controller_azp_application = $var_m_zv_dashboard->sql_controller_azp_application();
						# Control para validar si existen datos
						if (false != $var_controller_azp_application): $var_count =+ 1;
							# Recorrer los datos de la consulta de la tabla y encodificarlos
							foreach ($var_controller_azp_application as $key => $value):
								# Control para validar el acceso segun el ingreso al aplicativo
								if ($value['lbl_azp_application_id_azp_application'] == $value['lbl_azp_user_v_id_azp_application']): $var_count =+ 2;
									# Cargar plantilla
									echo $this->template->render('backend/dashboard/' . $value['lbl_azp_application_t_template'], array(
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_gsc_phase_name' => $var_m_azp_gsc_phase->sql_controller_read(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_client_data' => $var_m_zv_dashboard->sql_controller_report_gsc_client(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_client_label' => $var_m_zv_dashboard->sql_controller_report_gsc_client(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_phase_data' => $var_m_zv_dashboard->sql_controller_report_gsc_phase(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_phase_label' => $var_m_zv_dashboard->sql_controller_report_gsc_phase(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_sql_select_tc_azp_ibn_client' => $var_m_zv_dashboard->sql_select_tc_azp_ibn_client(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_sql_select_tc_azp_ibn_sector' => $var_m_zv_dashboard->sql_select_tc_azp_ibn_sector(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_sql_select_tc_azp_ibn_sector_two' => $var_m_zv_dashboard->sql_select_tc_azp_ibn_sector(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_tc_ibn_control_viability_client' => $var_m_zv_dashboard->sql_tc_ibn_control_viability_client(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_tc_ibn_control_viability_base' => $var_m_zv_dashboard->sql_tc_ibn_control_viability_base(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_tc_ibn_control_posession_client' => $var_m_zv_dashboard->sql_tc_ibn_control_posession_client(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_tc_ibn_control_posession_base' => $var_m_zv_dashboard->sql_tc_ibn_control_posession_base(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_tc_ibn_control_viability_code' => $var_m_zv_dashboard->sql_tc_ibn_control_viability_code(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_tc_ibn_control_ultime_base' => $var_m_zv_dashboard->sql_tc_ibn_control_ultime_base(),

										# Consultar registros de la tabla por medio del modelo instanciado
										'df_tc_gsc_request_ultime_base' => $var_m_zv_dashboard->sql_tc_gsc_request_ultime_base(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_tc_gsc_request_code' => $var_m_zv_dashboard->sql_tc_gsc_request_code(),

										# Consultar registros de la tabla por medio del modelo instanciado
										'df_tc_gsc_request_ultime_causal' => $var_m_zv_dashboard->sql_tc_gsc_request_ultime_causal(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'df_tc_gsc_request_causal' => $var_m_zv_dashboard->sql_tc_gsc_request_causal(),

										# Consultar registros de la tabla por medio del modelo instanciado
										'df_select_tc_azp_ibn_image' => $var_m_zv_dashboard->sql_select_tc_azp_ibn_image(),
										# Consultar registros de la tabla por medio del modelo instanciado
										'var_permits_role' => $result_permits_role
									));
								endif;
							endforeach;
							# Validacion de datos
							if ($var_count == 1) {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . 'dashboard/other/');
								# Detener la ejecucion
								exit();
							}
						endif;
						# Finalizar el codigo
						exit();
						break;
					case 'other':
						# Cargar plantilla
						echo $this->template->render('backend/general/other', array(
							# Consultar registros de la tabla por medio del modelo instanciado
							'df_application_access' => $var_m_zz_design->sql_application_access(),
							# Consultar registros de la tabla por medio del modelo instanciado
							'var_permits_role' => $result_permits_role
						));
						# Detener la ejecucion
						exit();
						break;
					case 'formatentity':
						# Control para validar el id
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_sql = $var_m_zv_dashboard->sql_controller_ibn_format_client();
							# Validar si la consulta es verdadera
							if (true == $var_sql) { foreach ($var_sql as $key_sql => $value): echo $var_name = $value[d_azp_ibn_format_file_t_original]; endforeach; } else { echo $var_name = 'Estructura Generado'; }
						} else { echo $var_name = 'Estructura Generado'; }
						break;
					case 'reportentity':
						# Control para validar el id
						if ($this->isset_id) {
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_zv_dashboard->sql_tc_ibn_report_policy_effective();
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_m_zv_dashboard->sql_tc_ibn_report_policy_viability();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_viability_general();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_viability_individual();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_effective_general();
							# Consultar registros de la tabla por medio del modelo instanciado
							//$var_m_zv_dashboard->sql_tc_ibn_report_policy_effective_individual();
							#-------------------------------------------------------------------------#
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_entity();
							# Validar si la consulta es verdadera
							if (true == $var_sql) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql as $key_sql => $value):
									# Asignacion de valores a nuevas variables
									$var_id_control_panel = $value['lbl_azp_ibn_control_panel_id_azp_ibn_control_panel'];
									$var_id_client = $value['lbl_azp_ibn_client_id_azp_ibn_client'];
									$var_client_name = $value['lbl_azp_ibn_client_t_name'];
									$var_id_format_file = $value['lbl_azp_ibn_format_file_id_azp_ibn_format_file'];
									$var_file_main = $value['lbl_azp_ibn_format_file_t_folder'];
									$var_file_name = $value['lbl_azp_ibn_format_file_t_name'];
									$var_file_document = $value['lbl_azp_ibn_format_file_w_document'];
									$var_file_folder = $value['lbl_azp_ibn_format_file_w_folder'];
									$var_file_route = $value['lbl_azp_ibn_format_file_w_route'];
								endforeach;
							} else {
								$var_id_control_panel = ''; $var_id_client = ''; $var_client_name = ''; $var_id_format_file = '';
								$var_file_name = ''; $var_file_document = ''; $var_file_folder = ''; $var_file_route = '';
							}
							#-------------------------------------------------------------------------#
							# Instanciando clases del modelo
							$var_spreadsheet = new Spreadsheet();
							# Plantilla del archivo con su extension
							$var_template = str_replace('../', '', $var_file_route) . $var_file_folder . $var_file_document;
							#-------------------------------------------------------------------------#
							$var_spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_template);
							$var_sheet = $var_spreadsheet->getActiveSheet();
							//$var_sheet = $var_spreadsheet->getActiveSheet()->setTitle('FORMATO');
							//$var_second = $var_spreadsheet->getActiveSheet()->setTitle('ICS');
							#-------------------------------------------------------------------------#
							# Ruta principal de la carpeta
							$var_ec_route = 'systemfiles/filesproject/';
							# Ruta de la carpeta principal
							$var_ec_folder = $var_file_main . '/';
							# Carpeta del año
							$var_ec_year = YEAR . '/';
							# Carpeta del año y mes
							$var_ec_month = YEAR_MONTH . '/';
							# Carpeta del año, mes y día
							$var_ec_date = DATE . '/';
							#-------------------------------------------------------------------------#
							# Consultar helper y sus opciones
							Helper::load('files');
							# Creacion de carpetas en el desarrollo
							Files::create_dir($var_ec_route . $var_ec_folder, 0777);
							# Creacion de carpetas en el desarrollo
							Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year, 0777);
							# Creacion de carpetas en el desarrollo
							Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month, 0777);
							# Creacion de carpetas en el desarrollo
							Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
							#-------------------------------------------------------------------------#
							# Nombre del archivo a guardar con sus datos respectivos
							$var_file_name = DATE_NUMBER . '_' . HOUR_NUMBER . '.xlsx';
							# Ruta de la carpeta para almacenar sus respectivos archivos
							$var_file_route = $var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date;
							# Ruta final concatenada para almacenar el archivo en su carpeta
							$var_file_final = $var_file_route . $var_file_name;
							#-------------------------------------------------------------------------#
							# Validar si la variable es correcta y no falsa
							if ($var_id_format_file == 1) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_agrario();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 3;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_sheet->setCellValue('A' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_dat_identification]));
										$var_sheet->setCellValue('B' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_dat_full_name]));
										$var_sheet->setCellValue('C' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_dat_outcome]));
										$var_sheet->setCellValue('D' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_dat_value_net]));
										$var_sheet->setCellValue('E' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_dat_value_vat]));
										$var_sheet->setCellValue('F' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_dat_value_query]));
										$var_sheet->setCellValue('G' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_property_1]));
										$var_sheet->setCellValue('H' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_address_1]));
										$var_sheet->setCellValue('I' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_enrollment_1]));
										$var_sheet->setCellValue('J' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_municipality_1]));
										$var_sheet->setCellValue('K' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_property_2]));
										$var_sheet->setCellValue('L' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_address_2]));
										$var_sheet->setCellValue('M' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_enrollment_2]));
										$var_sheet->setCellValue('N' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_municipality_2]));
										$var_sheet->setCellValue('O' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_property_3]));
										$var_sheet->setCellValue('P' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_address_3]));
										$var_sheet->setCellValue('Q' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_enrollment_3]));
										$var_sheet->setCellValue('R' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_municipality_3]));
										$var_sheet->setCellValue('S' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_property_4]));
										$var_sheet->setCellValue('T' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_address_4]));
										$var_sheet->setCellValue('U' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_enrollment_4]));
										$var_sheet->setCellValue('V' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_municipality_4]));
										$var_sheet->setCellValue('W' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_property_5]));
										$var_sheet->setCellValue('X' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_address_5]));
										$var_sheet->setCellValue('Y' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_enrollment_5]));
										$var_sheet->setCellValue('Z' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_pro_municipality_5]));
										$var_sheet->setCellValue('AA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_plaque_1]));
										$var_sheet->setCellValue('AB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_mark_1]));
										$var_sheet->setCellValue('AC' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_model_1]));
										$var_sheet->setCellValue('AD' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_class_1]));
										$var_sheet->setCellValue('AE' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_line_1]));
										$var_sheet->setCellValue('AF' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_city_1]));
										$var_sheet->setCellValue('AG' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_plaque_2]));
										$var_sheet->setCellValue('AH' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_mark_2]));
										$var_sheet->setCellValue('AI' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_model_2]));
										$var_sheet->setCellValue('AJ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_class_2]));
										$var_sheet->setCellValue('AK' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_line_2]));
										$var_sheet->setCellValue('AL' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_city_2]));
										$var_sheet->setCellValue('AM' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_plaque_3]));
										$var_sheet->setCellValue('AN' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_mark_3]));
										$var_sheet->setCellValue('AO' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_model_3]));
										$var_sheet->setCellValue('AP' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_class_3]));
										$var_sheet->setCellValue('AQ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_line_3]));
										$var_sheet->setCellValue('AR' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_city_3]));
										$var_sheet->setCellValue('AS' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_plaque_4]));
										$var_sheet->setCellValue('AT' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_mark_4]));
										$var_sheet->setCellValue('AU' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_model_4]));
										$var_sheet->setCellValue('AV' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_class_4]));
										$var_sheet->setCellValue('AW' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_line_4]));
										$var_sheet->setCellValue('AX' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_city_4]));
										$var_sheet->setCellValue('AY' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_plaque_5]));
										$var_sheet->setCellValue('AZ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_mark_5]));
										$var_sheet->setCellValue('BA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_model_5]));
										$var_sheet->setCellValue('BB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_class_5]));
										$var_sheet->setCellValue('BC' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_line_5]));
										$var_sheet->setCellValue('BD' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_veh_city_5]));
										$var_sheet->setCellValue('BE' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_war_creditor]));
										$var_sheet->setCellValue('BF' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_war_type]));
										$var_sheet->setCellValue('BG' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_war_detail]));
										$var_sheet->setCellValue('BH' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_war_value]));
										$var_sheet->setCellValue('BI' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_cam_nit]));
										$var_sheet->setCellValue('BJ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_cam_business]));
										$var_sheet->setCellValue('BK' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_cam_enrollment]));
										$var_sheet->setCellValue('BL' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_cam_municipality]));
										$var_sheet->setCellValue('BM' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_cam_year_renew]));
										$var_sheet->setCellValue('BN' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_cam_address]));
										$var_sheet->setCellValue('BO' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_cam_phone]));
										$var_sheet->setCellValue('BP' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_nit]));
										$var_sheet->setCellValue('BQ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_business]));
										$var_sheet->setCellValue('BR' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_phone]));
										$var_sheet->setCellValue('BS' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_address]));
										$var_sheet->setCellValue('BT' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_municipality]));
										$var_sheet->setCellValue('BU' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_salary]));
										$var_sheet->setCellValue('BV' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_contributor]));
										$var_sheet->setCellValue('BW' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_entity]));
										$var_sheet->setCellValue('BX' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_regime]));
										$var_sheet->setCellValue('BY' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_affiliate]));
										$var_sheet->setCellValue('BZ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_fur_state]));
										$var_sheet->setCellValue('CA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_dat_observation]));
										$var_sheet->setCellValue('CB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_agrario_t_dat_source]));
										# Incrementar valores
										$i++;
									}
								}
								#-------------------------------------------------------------------------#
								//$var_spreadsheet->createSheet();
								$var_spreadsheet->setActiveSheetIndex(1);
								$var_second = $var_spreadsheet->getActiveSheet()->setTitle('ANEXO INMUEBLES');
								#-------------------------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_agrario_pro();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 2;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_second->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_identification']));
										$var_second->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_full_name']));
										$var_second->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_ibn_type_property_t_name']));
										$var_second->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_address']));
										$var_second->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_nro_registration']));
										$var_second->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_ibn_property_t_municipality']));
										# Incrementar valores
										$i++;
									}
								}
								#-------------------------------------------------------------------------#
								//$var_spreadsheet->createSheet();
								$var_spreadsheet->setActiveSheetIndex(2);
								$var_third = $var_spreadsheet->getActiveSheet()->setTitle('ANEXO VEHICULOS');
								#-------------------------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_agrario_veh();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 2;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_third->setCellValue('A' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_identification']));
										$var_third->setCellValue('B' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_full_name']));
										$var_third->setCellValue('C' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_plaque']));
										$var_third->setCellValue('D' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_mark']));
										$var_third->setCellValue('E' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_model']));
										$var_third->setCellValue('F' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_class']));
										$var_third->setCellValue('G' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_line']));
										$var_third->setCellValue('H' . $i, html_entity_decode($value['lbl_azp_ibn_vehicle_t_city']));
										# Incrementar valores
										$i++;
									}
								}
							}
							#-------------------------------------------------------------------------#
							# Validar si la variable es correcta y no falsa
							if ($var_id_format_file == 2) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_banco_bbva();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 3;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_sheet->setCellValue('A' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_date_deliver]));
										$var_sheet->setCellValue('B' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_date_arrival]));
										$var_sheet->setCellValue('C' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_identification]));
										$var_sheet->setCellValue('D' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_full_name]));
										$var_sheet->setCellValue('E' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_attorney]));
										$var_sheet->setCellValue('F' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_effective]));
										$var_sheet->setCellValue('G' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_viability]));
										$var_sheet->setCellValue('H' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_pro_enrollment]));
										$var_sheet->setCellValue('I' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_pro_address]));
										$var_sheet->setCellValue('J' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_pro_municipality]));
										$var_sheet->setCellValue('K' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_pro_concept]));
										$var_sheet->setCellValue('L' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_pro_effective]));
										$var_sheet->setCellValue('M' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_pro_viability]));
										$var_sheet->setCellValue('N' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_veh_class]));
										$var_sheet->setCellValue('O' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_veh_model]));
										$var_sheet->setCellValue('P' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_veh_plaque]));
										$var_sheet->setCellValue('Q' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_veh_mark]));
										$var_sheet->setCellValue('R' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_veh_city]));
										$var_sheet->setCellValue('S' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_veh_value]));
										$var_sheet->setCellValue('T' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_veh_concept]));
										$var_sheet->setCellValue('U' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_veh_effective]));
										$var_sheet->setCellValue('V' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_veh_viability]));
										$var_sheet->setCellValue('W' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_war_type]));
										$var_sheet->setCellValue('X' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_war_concept]));
										$var_sheet->setCellValue('Y' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_war_effective]));
										$var_sheet->setCellValue('Z' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_war_viability]));
										$var_sheet->setCellValue('AA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_fur_business]));
										$var_sheet->setCellValue('AB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_fur_address]));
										$var_sheet->setCellValue('AC' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_fur_salary]));
										$var_sheet->setCellValue('AD' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_fur_regime]));
										$var_sheet->setCellValue('AE' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_fur_affiliate]));
										$var_sheet->setCellValue('AF' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_fur_concept]));
										$var_sheet->setCellValue('AG' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_fur_effective]));
										$var_sheet->setCellValue('AH' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_fur_viability]));
										$var_sheet->setCellValue('AI' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_cam_enrollment]));
										$var_sheet->setCellValue('AJ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_cam_date_renovation]));
										$var_sheet->setCellValue('AK' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_cam_type_society]));
										$var_sheet->setCellValue('AL' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_cam_rp_identification]));
										$var_sheet->setCellValue('AM' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_cam_rp_full_name]));
										$var_sheet->setCellValue('AN' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_cam_data_rup]));
										$var_sheet->setCellValue('AO' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_cam_viable]));
										$var_sheet->setCellValue('AP' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_cam_concept]));
										$var_sheet->setCellValue('AQ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_cam_effective]));
										$var_sheet->setCellValue('AR' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_cam_viability]));
										$var_sheet->setCellValue('AS' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_company]));
										$var_sheet->setCellValue('AT' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_consecutive]));
										$var_sheet->setCellValue('AU' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_formula]));
										$var_sheet->setCellValue('AV' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bbva_t_dat_obligation]));
										# Incrementar valores
										$i++;
									}
								}
							}
							#-------------------------------------------------------------------------#
							# Validar si la variable es correcta y no falsa
							if ($var_id_format_file == 3) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_banco_bogota();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 2;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_sheet->setCellValue('A' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_code_research]));
										$var_sheet->setCellValue('B' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_date_arrival]));
										$var_sheet->setCellValue('C' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_red]));
										$var_sheet->setCellValue('D' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_code_base]));
										$var_sheet->setCellValue('E' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_full_name]));
										$var_sheet->setCellValue('F' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_city]));
										$var_sheet->setCellValue('G' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_department]));
										$var_sheet->setCellValue('H' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_attorney]));
										$var_sheet->setCellValue('I' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_pro_enrollment]));
										$var_sheet->setCellValue('J' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_pro_address]));
										$var_sheet->setCellValue('K' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_pro_municipality]));
										$var_sheet->setCellValue('L' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_veh_class]));
										$var_sheet->setCellValue('M' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_veh_model]));
										$var_sheet->setCellValue('N' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_veh_plaque]));
										$var_sheet->setCellValue('O' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_veh_mark]));
										$var_sheet->setCellValue('P' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_veh_city]));
										$var_sheet->setCellValue('Q' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_fur_business]));
										$var_sheet->setCellValue('R' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_fur_address]));
										$var_sheet->setCellValue('S' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_fur_salary]));
										$var_sheet->setCellValue('T' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_fur_affiliate]));
										$var_sheet->setCellValue('U' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_fur_contributor]));
										$var_sheet->setCellValue('V' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_cam_concept]));
										$var_sheet->setCellValue('W' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_viability]));
										$var_sheet->setCellValue('X' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_concept]));
										$var_sheet->setCellValue('Y' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_supplier]));
										$var_sheet->setCellValue('Z' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_veh_value]));
										$var_sheet->setCellValue('AA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_veh_assessment]));
										$var_sheet->setCellValue('AB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_veh_total]));
										$var_sheet->setCellValue('AC' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_pro_value]));
										$var_sheet->setCellValue('AD' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_pro_assessment]));
										$var_sheet->setCellValue('AE' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_pro_total]));
										$var_sheet->setCellValue('AF' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_value_total]));
										$var_sheet->setCellValue('AG' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_formula]));
										$var_sheet->setCellValue('AH' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_effective]));
										$var_sheet->setCellValue('AI' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_consecutive]));
										$var_sheet->setCellValue('AJ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_honorary_well]));
										$var_sheet->setCellValue('AK' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_honorary_study]));
										$var_sheet->setCellValue('AL' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_camera]));
										$var_sheet->setCellValue('AM' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_property]));
										$var_sheet->setCellValue('AN' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_total]));
										$var_sheet->setCellValue('AO' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_receipt_fmi]));
										$var_sheet->setCellValue('AP' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_bogota_t_dat_receipt_rma]));
										# Incrementar valores
										$i++;
									}
								}
								#-------------------------------------------------------------------------#
								//$var_spreadsheet->createSheet();
								$var_spreadsheet->setActiveSheetIndex(1);
								$var_second = $var_spreadsheet->getActiveSheet()->setTitle('ICS');
								#-------------------------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_ics_bogota();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 2;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_second->setCellValue('A' . $i, html_entity_decode($value[d_azp_ibn_report_structure_ics_bogota_t_supplier]));
										$var_second->setCellValue('B' . $i, html_entity_decode($value[d_azp_ibn_report_structure_ics_bogota_t_date_arrival]));
										$var_second->setCellValue('C' . $i, html_entity_decode($value[d_azp_ibn_report_structure_ics_bogota_t_date_reply]));
										$var_second->setCellValue('D' . $i, html_entity_decode($value[d_azp_ibn_report_structure_ics_bogota_t_id_ics]));
										$var_second->setCellValue('E' . $i, html_entity_decode($value[d_azp_ibn_report_structure_ics_bogota_t_etapa]));
										$var_second->setCellValue('F' . $i, html_entity_decode($value[d_azp_ibn_report_structure_ics_bogota_t_observation]));
										
										//$var_second->setCellValue('G' . $i, html_entity_decode($value[d_azp_ibn_report_structure_ics_bogota_t_module]));
										//$var_second->setCellValue('H' . $i, html_entity_decode($value[d_azp_ibn_report_structure_ics_bogota_t_viable]));
										# Incrementar valores
										$i++;
									}
								}
							}
							#-------------------------------------------------------------------------#
							# Validar si la variable es correcta y no falsa
							if ($var_id_format_file == 4) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_fincomercio();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 2;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_sheet->setCellValue('A' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_id_client]));
										$var_sheet->setCellValue('B' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_head_identification]));
										$var_sheet->setCellValue('C' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_head_full_name]));
										$var_sheet->setCellValue('D' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_identification]));
										$var_sheet->setCellValue('E' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_full_name]));
										$var_sheet->setCellValue('F' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_quality]));
										$var_sheet->setCellValue('G' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_city]));
										$var_sheet->setCellValue('H' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_date_deliver]));
										$var_sheet->setCellValue('I' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_consecutive]));
										$var_sheet->setCellValue('J' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_pro_enrollment_1]));
										$var_sheet->setCellValue('K' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_pro_municipality_1]));
										$var_sheet->setCellValue('L' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_pro_enrollment_2]));
										$var_sheet->setCellValue('M' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_pro_municipality_2]));
										$var_sheet->setCellValue('N' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_pro_enrollment_3]));
										$var_sheet->setCellValue('O' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_pro_municipality_3]));
										$var_sheet->setCellValue('P' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_pro_enrollment_4]));
										$var_sheet->setCellValue('Q' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_pro_municipality_4]));
										$var_sheet->setCellValue('R' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_cam_municipality]));
										$var_sheet->setCellValue('S' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_cam_enrollment]));
										$var_sheet->setCellValue('T' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_veh_plaque_1]));
										$var_sheet->setCellValue('U' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_veh_city_1]));
										$var_sheet->setCellValue('V' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_veh_plaque_2]));
										$var_sheet->setCellValue('W' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_veh_city_2]));
										$var_sheet->setCellValue('X' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_veh_plaque_3]));
										$var_sheet->setCellValue('Y' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_veh_city_3]));
										$var_sheet->setCellValue('Z' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_veh_plaque_4]));
										$var_sheet->setCellValue('AA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_veh_city_4]));
										$var_sheet->setCellValue('AB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_fur_nit]));
										$var_sheet->setCellValue('AC' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_fur_business]));
										$var_sheet->setCellValue('AD' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_fur_phone]));
										$var_sheet->setCellValue('AE' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_fur_address]));
										$var_sheet->setCellValue('AF' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_fur_deparment]));
										$var_sheet->setCellValue('AG' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_fur_municipality]));
										$var_sheet->setCellValue('AH' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_fur_salary]));
										$var_sheet->setCellValue('AI' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_fur_regime]));
										$var_sheet->setCellValue('AJ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_fur_entity]));
										$var_sheet->setCellValue('AK' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_fur_contributor]));
										$var_sheet->setCellValue('AL' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_concept]));
										$var_sheet->setCellValue('AM' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_rate]));
										$var_sheet->setCellValue('AN' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_through]));
										$var_sheet->setCellValue('AO' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_certified]));
										$var_sheet->setCellValue('AP' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_vat]));
										$var_sheet->setCellValue('AQ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_total]));
										$var_sheet->setCellValue('AR' . $i, html_entity_decode($value[d_azp_ibn_report_structure_fincomercio_t_dat_effective]));
										# Incrementar valores
										$i++;
									}
								}
							}
							#-------------------------------------------------------------------------#
							# Validar si la variable es correcta y no falsa
							if ($var_id_format_file == 5) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_protecsa();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 2;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_sheet->setCellValue('A' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_dat_consecutive]));
										$var_sheet->setCellValue('B' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_dat_identification]));
										$var_sheet->setCellValue('C' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_dat_full_name]));
										$var_sheet->setCellValue('D' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_dat_effective]));
										$var_sheet->setCellValue('E' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_enrollment_1]));
										$var_sheet->setCellValue('F' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_address_1]));
										$var_sheet->setCellValue('G' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_municipality_1]));
										$var_sheet->setCellValue('H' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_enrollment_2]));
										$var_sheet->setCellValue('I' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_address_2]));
										$var_sheet->setCellValue('J' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_municipality_2]));
										$var_sheet->setCellValue('K' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_enrollment_3]));
										$var_sheet->setCellValue('L' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_address_3]));
										$var_sheet->setCellValue('M' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_municipality_3]));
										$var_sheet->setCellValue('N' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_enrollment_4]));
										$var_sheet->setCellValue('O' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_address_4]));
										$var_sheet->setCellValue('P' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_municipality_4]));
										$var_sheet->setCellValue('Q' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_enrollment_5]));
										$var_sheet->setCellValue('R' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_address_5]));
										$var_sheet->setCellValue('S' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_pro_municipality_5]));
										$var_sheet->setCellValue('T' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_cam_enrollment]));
										$var_sheet->setCellValue('U' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_cam_municipality]));
										$var_sheet->setCellValue('V' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_class_1]));
										$var_sheet->setCellValue('W' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_model_1]));
										$var_sheet->setCellValue('X' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_mark_1]));
										$var_sheet->setCellValue('Y' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_plaque_1]));
										$var_sheet->setCellValue('Z' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_city_1]));
										$var_sheet->setCellValue('AA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_class_2]));
										$var_sheet->setCellValue('AB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_model_2]));
										$var_sheet->setCellValue('AC' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_mark_2]));
										$var_sheet->setCellValue('AD' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_plaque_2]));
										$var_sheet->setCellValue('AE' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_city_2]));
										$var_sheet->setCellValue('AF' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_class_3]));
										$var_sheet->setCellValue('AG' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_model_3]));
										$var_sheet->setCellValue('AH' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_mark_3]));
										$var_sheet->setCellValue('AI' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_plaque_3]));
										$var_sheet->setCellValue('AJ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_city_3]));
										$var_sheet->setCellValue('AK' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_class_4]));
										$var_sheet->setCellValue('AL' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_model_4]));
										$var_sheet->setCellValue('AM' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_mark_4]));
										$var_sheet->setCellValue('AN' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_plaque_4]));
										$var_sheet->setCellValue('AO' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_city_4]));
										$var_sheet->setCellValue('AP' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_class_5]));
										$var_sheet->setCellValue('AQ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_model_5]));
										$var_sheet->setCellValue('AR' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_mark_5]));
										$var_sheet->setCellValue('AS' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_plaque_5]));
										$var_sheet->setCellValue('AT' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_veh_city_5]));
										$var_sheet->setCellValue('AU' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_fur_nit]));
										$var_sheet->setCellValue('AV' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_fur_business]));
										$var_sheet->setCellValue('AW' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_fur_phone]));
										$var_sheet->setCellValue('AX' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_fur_address]));
										$var_sheet->setCellValue('AY' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_fur_deparment]));
										$var_sheet->setCellValue('AZ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_fur_municipality]));
										$var_sheet->setCellValue('BA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_fur_salary]));
										$var_sheet->setCellValue('BB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_fur_regime]));
										$var_sheet->setCellValue('BC' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_fur_affiliate]));
										$var_sheet->setCellValue('BD' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_fur_contributor]));
										$var_sheet->setCellValue('BE' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_dat_concept]));
										$var_sheet->setCellValue('BF' . $i, html_entity_decode($value[d_azp_ibn_report_structure_protecsa_t_dat_supplier]));
										# Incrementar valores
										$i++;
									}
								}
								#-------------------------------------------------------------------------#
								//$var_spreadsheet->createSheet();
								$var_spreadsheet->setActiveSheetIndex(1);
								$var_second = $var_spreadsheet->getActiveSheet()->setTitle('ANEXO VEH');
								#-------------------------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_protecsa_veh();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 2;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_second->setCellValue('A' . $i, html_entity_decode($vale['lbl_azp_ibn_vehicle_t_consecutive']));
										$var_second->setCellValue('B' . $i, html_entity_decode($vale['lbl_azp_ibn_vehicle_t_identification']));
										$var_second->setCellValue('C' . $i, html_entity_decode($vale['lbl_azp_ibn_vehicle_t_full_name']));
										$var_second->setCellValue('D' . $i, html_entity_decode($vale['lbl_azp_ibn_vehicle_t_class']));
										$var_second->setCellValue('E' . $i, html_entity_decode($vale['lbl_azp_ibn_vehicle_t_model']));
										$var_second->setCellValue('F' . $i, html_entity_decode($vale['lbl_azp_ibn_vehicle_t_mark']));
										$var_second->setCellValue('G' . $i, html_entity_decode($vale['lbl_azp_ibn_vehicle_t_plaque']));
										$var_second->setCellValue('H' . $i, html_entity_decode($vale['lbl_azp_ibn_vehicle_t_city']));
										# Incrementar valores
										$i++;
									}
								}
								#-------------------------------------------------------------------------#
								//$var_spreadsheet->createSheet();
								$var_spreadsheet->setActiveSheetIndex(2);
								$var_third = $var_spreadsheet->getActiveSheet()->setTitle('ANEXO INM');
								#-------------------------------------------------------------------------#
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_protecsa_pro();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 2;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_third->setCellValue('A' . $i, html_entity_decode($vale['lbl_azp_ibn_property_t_consecutive']));
										$var_third->setCellValue('B' . $i, html_entity_decode($vale['lbl_azp_ibn_property_t_identification']));
										$var_third->setCellValue('C' . $i, html_entity_decode($vale['lbl_azp_ibn_property_t_full_name']));
										$var_third->setCellValue('D' . $i, html_entity_decode($vale['lbl_azp_ibn_property_t_nro_registration']));
										$var_third->setCellValue('E' . $i, html_entity_decode($vale['lbl_azp_ibn_property_t_address']));
										$var_third->setCellValue('F' . $i, html_entity_decode($vale['lbl_azp_ibn_property_t_municipality']));
										# Incrementar valores
										$i++;
									}
								}
							}
							#-------------------------------------------------------------------------#
							# Validar si la variable es correcta y no falsa
							if ($var_id_format_file == 6) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_banco_popular();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 2;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_sheet->setCellValue('A' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_date_deliver]));
										$var_sheet->setCellValue('B' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_consecutive]));
										$var_sheet->setCellValue('C' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_obligation]));
										$var_sheet->setCellValue('D' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_identification]));
										$var_sheet->setCellValue('E' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_full_name]));
										$var_sheet->setCellValue('F' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_city]));
										$var_sheet->setCellValue('G' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_unique]));
										$var_sheet->setCellValue('H' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_attorney]));
										$var_sheet->setCellValue('I' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_segment]));
										$var_sheet->setCellValue('J' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_product]));
										$var_sheet->setCellValue('K' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_capital]));
										$var_sheet->setCellValue('L' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_mortgage]));
										$var_sheet->setCellValue('M' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_viability]));
										$var_sheet->setCellValue('N' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_pro_enrollment]));
										$var_sheet->setCellValue('O' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_pro_address]));
										$var_sheet->setCellValue('P' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_pro_city]));
										$var_sheet->setCellValue('Q' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_pro_assessment]));
										$var_sheet->setCellValue('R' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_pro_viability]));
										$var_sheet->setCellValue('S' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_veh_class]));
										$var_sheet->setCellValue('T' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_veh_model]));
										$var_sheet->setCellValue('U' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_veh_plaque]));
										$var_sheet->setCellValue('V' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_veh_mark]));
										$var_sheet->setCellValue('W' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_veh_city]));
										$var_sheet->setCellValue('X' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_veh_value]));
										$var_sheet->setCellValue('Y' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_war_garanty]));
										$var_sheet->setCellValue('Z' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_war_liens]));
										$var_sheet->setCellValue('AA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_veh_concept]));
										$var_sheet->setCellValue('AB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_veh_effective]));
										$var_sheet->setCellValue('AC' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_veh_limitation]));
										$var_sheet->setCellValue('AD' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_veh_viability]));
										$var_sheet->setCellValue('AE' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_fur_business]));
										$var_sheet->setCellValue('AF' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_fur_address]));
										$var_sheet->setCellValue('AG' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_fur_city]));
										$var_sheet->setCellValue('AH' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_fur_salary]));
										$var_sheet->setCellValue('AI' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_fur_type_affiliate]));
										$var_sheet->setCellValue('AJ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_fur_concept]));
										$var_sheet->setCellValue('AK' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_fur_viability]));
										$var_sheet->setCellValue('AL' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_cam_enrollment]));
										$var_sheet->setCellValue('AM' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_cam_year_renew]));
										$var_sheet->setCellValue('AN' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_cam_city]));
										$var_sheet->setCellValue('AO' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_cam_concept]));
										$var_sheet->setCellValue('AP' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_cam_viability]));
										$var_sheet->setCellValue('AQ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_company]));
										$var_sheet->setCellValue('AR' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_client]));
										$var_sheet->setCellValue('AS' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_effective]));
										$var_sheet->setCellValue('AT' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_observation]));
										$var_sheet->setCellValue('AU' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_value_investigation]));
										$var_sheet->setCellValue('AV' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_value_certificate]));
										$var_sheet->setCellValue('AW' . $i, html_entity_decode($value[d_azp_ibn_report_structure_banco_popular_t_dat_total_client]));
										# Incrementar valores
										$i++;
									}
								}
							}
							#-------------------------------------------------------------------------#
							# Validar si la variable es correcta y no falsa
							if ($var_id_format_file == 7) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_coface();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 7;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_sheet->setCellValue('A' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_consecutive]));
										$var_sheet->setCellValue('B' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_date_arrival]));
										$var_sheet->setCellValue('C' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_number]));
										$var_sheet->setCellValue('D' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_client]));
										$var_sheet->setCellValue('E' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_full_name]));
										$var_sheet->setCellValue('F' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_identification]));
										$var_sheet->setCellValue('G' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_city]));
										$var_sheet->setCellValue('H' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_pro_enrollment]));
										$var_sheet->setCellValue('I' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_pro_municipality]));
										$var_sheet->setCellValue('J' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_pro_address]));
										$var_sheet->setCellValue('K' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_veh_plaque]));
										$var_sheet->setCellValue('L' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_veh_city]));
										$var_sheet->setCellValue('M' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_veh_class]));
										$var_sheet->setCellValue('N' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_veh_mark]));
										$var_sheet->setCellValue('O' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_veh_model]));
										$var_sheet->setCellValue('P' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_cam_enrollment]));
										$var_sheet->setCellValue('Q' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_cam_year_renew]));
										$var_sheet->setCellValue('R' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_cam_city]));
										$var_sheet->setCellValue('S' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_cam_business]));
										$var_sheet->setCellValue('T' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_fur_business]));
										$var_sheet->setCellValue('U' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_fur_address]));
										$var_sheet->setCellValue('V' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_fur_rank]));
										$var_sheet->setCellValue('W' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_fur_contributor]));
										$var_sheet->setCellValue('X' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_concept]));
										$var_sheet->setCellValue('Y' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_date_send]));
										$var_sheet->setCellValue('Z' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_date_reply]));
										$var_sheet->setCellValue('AA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_coface_t_dat_viability]));
										# Incrementar valores
										$i++;
									}
								}
							}
							#-------------------------------------------------------------------------#
							# Validar si la variable es correcta y no falsa
							if ($var_id_format_file == 8) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_comercial();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 3;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_sheet->setCellValue('A' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_dat_consecutive]));
										$var_sheet->setCellValue('B' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_dat_formula]));
										$var_sheet->setCellValue('C' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_dat_identification]));
										$var_sheet->setCellValue('D' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_dat_full_name]));
										$var_sheet->setCellValue('E' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_dat_effective]));
										$var_sheet->setCellValue('F' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_dat_union_well]));
										$var_sheet->setCellValue('G' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_enrollment]));
										$var_sheet->setCellValue('H' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_municipality]));
										$var_sheet->setCellValue('I' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_address]));
										$var_sheet->setCellValue('J' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_ownership]));
										$var_sheet->setCellValue('K' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_comercial]));
										$var_sheet->setCellValue('L' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_assessment]));
										$var_sheet->setCellValue('M' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_indebtedness]));
										$var_sheet->setCellValue('N' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_affectation]));
										$var_sheet->setCellValue('O' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_sequestered]));
										$var_sheet->setCellValue('P' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_encumbrance]));
										$var_sheet->setCellValue('Q' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_pro_concept]));
										$var_sheet->setCellValue('R' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_viability]));
										$var_sheet->setCellValue('S' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_plaque]));
										$var_sheet->setCellValue('T' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_class]));
										$var_sheet->setCellValue('U' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_mark]));
										$var_sheet->setCellValue('V' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_model]));
										$var_sheet->setCellValue('W' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_city]));
										$var_sheet->setCellValue('X' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_value]));
										$var_sheet->setCellValue('Y' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_sequestered]));
										$var_sheet->setCellValue('Z' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_val_register]));
										$var_sheet->setCellValue('AA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_entity]));
										$var_sheet->setCellValue('AB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_veh_concept]));
										$var_sheet->setCellValue('AC' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_fur_rank]));
										$var_sheet->setCellValue('AD' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_fur_entity_one]));
										$var_sheet->setCellValue('AE' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_fur_city]));
										$var_sheet->setCellValue('AF' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_fur_contributor]));
										$var_sheet->setCellValue('AG' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_fur_concept]));
										$var_sheet->setCellValue('AH' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_cam_enrollment]));
										$var_sheet->setCellValue('AI' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_cam_city]));
										$var_sheet->setCellValue('AJ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_cam_year_renew]));
										$var_sheet->setCellValue('AK' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_cam_concept]));
										$var_sheet->setCellValue('AL' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_fur_regime]));
										$var_sheet->setCellValue('AM' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_fur_entity_two]));
										$var_sheet->setCellValue('AN' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_fur_affiliate]));
										$var_sheet->setCellValue('AO' . $i, html_entity_decode($value[d_azp_ibn_report_structure_comercial_t_fur_state]));
										# Incrementar valores
										$i++;
									}
								}
							}
							#-------------------------------------------------------------------------#
							# Validar si la variable es correcta y no falsa
							if ($var_id_format_file == 9) {
								# Consultar registros de la tabla por medio del modelo instanciado
								$var_sql = $var_m_zv_dashboard->sql_controller_ibn_report_structure_propia();
								# Validar si la variable es correcta y no falsa
								if (false != $var_sql) { $i = 3;
									# Recorrer datos de la base
									foreach ($var_sql as $key => $value) {
										# Asignar valores a las celdas de excel
										$var_sheet->setCellValue('A' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_dat_date_deliver]));
										$var_sheet->setCellValue('B' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_dat_date_arrival]));
										$var_sheet->setCellValue('C' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_dat_identification]));
										$var_sheet->setCellValue('D' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_dat_full_name]));
										$var_sheet->setCellValue('E' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_dat_effective]));
										$var_sheet->setCellValue('F' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_dat_viability]));
										$var_sheet->setCellValue('G' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_pro_enrollment]));
										$var_sheet->setCellValue('H' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_pro_address]));
										$var_sheet->setCellValue('I' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_pro_municipality]));
										$var_sheet->setCellValue('J' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_pro_ownership]));
										$var_sheet->setCellValue('K' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_pro_encumbrance]));
										$var_sheet->setCellValue('L' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_pro_assessment]));
										$var_sheet->setCellValue('M' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_pro_concept]));
										$var_sheet->setCellValue('N' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_pro_viability]));
										$var_sheet->setCellValue('O' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_veh_class]));
										$var_sheet->setCellValue('P' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_veh_model]));
										$var_sheet->setCellValue('Q' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_veh_plaque]));
										$var_sheet->setCellValue('R' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_veh_mark]));
										$var_sheet->setCellValue('S' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_veh_city]));
										$var_sheet->setCellValue('T' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_veh_value]));
										$var_sheet->setCellValue('U' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_veh_assessment]));
										$var_sheet->setCellValue('V' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_veh_concept]));
										$var_sheet->setCellValue('W' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_veh_viability]));
										$var_sheet->setCellValue('X' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_fur_business]));
										$var_sheet->setCellValue('Y' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_fur_address]));
										$var_sheet->setCellValue('Z' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_fur_phone]));
										$var_sheet->setCellValue('AA' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_fur_city]));
										$var_sheet->setCellValue('AB' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_fur_salary]));
										$var_sheet->setCellValue('AC' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_fur_regime]));
										$var_sheet->setCellValue('AD' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_fur_affiliate]));
										$var_sheet->setCellValue('AE' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_fur_concept]));
										$var_sheet->setCellValue('AF' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_fur_viability]));
										$var_sheet->setCellValue('AG' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_cam_enrollment]));
										$var_sheet->setCellValue('AH' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_cam_city]));
										$var_sheet->setCellValue('AI' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_cam_establishment]));
										$var_sheet->setCellValue('AJ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_cam_year_renew]));
										$var_sheet->setCellValue('AK' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_cam_assessment]));
										$var_sheet->setCellValue('AL' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_cam_legal_identification]));
										$var_sheet->setCellValue('AM' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_cam_legal_full_name]));
										$var_sheet->setCellValue('AN' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_cam_concept]));
										$var_sheet->setCellValue('AO' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_cam_viability]));
										$var_sheet->setCellValue('AP' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_war_garanty]));
										$var_sheet->setCellValue('AQ' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_war_concept]));
										$var_sheet->setCellValue('AR' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_dat_company]));
										$var_sheet->setCellValue('AS' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_dat_consecutive]));
										$var_sheet->setCellValue('AT' . $i, html_entity_decode($value[d_azp_ibn_report_structure_propia_t_dat_formula]));
										# Incrementar valores
										$i++;
									}
								}
							}
							#-------------------------------------------------------------------------#
							# Escribir valores sobre las celdas
							$var_writer = new Xlsx($var_spreadsheet);
							$var_writer->save($var_file_final);
							$var_folder = opendir($var_file_route);
							# Recorrer datos del archivo para validacion
							while ($var_element = readdir($var_folder)) {
								if (!is_dir($var_file_route . $var_element)) {
									$var_extension = pathinfo($var_element, PATHINFO_EXTENSION);
									$var_extension = strtolower($var_extension);
								}
							}
							#-------------------------------------------------------------------------#
							# Dar permisos a la carpeta y archivo
							chmod($var_ec_route . $var_ec_folder, 0777);
							# Dar permisos a la carpeta y archivo
							chmod($var_ec_route . $var_ec_folder . $var_ec_year, 0777);
							# Dar permisos a la carpeta y archivo
							chmod($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month, 0777);
							# Dar permisos a la carpeta y archivo
							chmod($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
							#-------------------------------------------------------------------------#
							echo $var_file_final;
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace($var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpdtgantt':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_zv_dashboard->sql_controller_ibn_format_gantt_detail();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_zv_dashboard->sql_controller_ibn_format_gantt_detail();
								# Imprimir una variable adicional
								echo $var_start = '{"status":true,"data":';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
								# Imprimir una variable adicional
								echo $var_end = '}';
							}
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'cpxlsxgantt':
						# Asignacion de valores a nuevas variables
						$var_date_month = $_GET['field_gnt_month'];
						$var_date_since = $var_date_month . '-01';
						$var_date_until = $var_date_month . '-31';
						# Documento Excel Formato
						$var_file_route = 'systemfiles/filesimport/';
						$var_file_folder = 'investigation/';
						$var_file_document = 'Formato Tablero.xlsx';
						#-------------------------------------------------------------------------#
						# Instanciando clases del modelo
						$var_spreadsheet = new Spreadsheet();
						# Plantilla del archivo con su extension
						$var_template = $var_file_route . $var_file_folder . $var_file_document;
						# Abrir el archivo para asignarle datos
						$var_spreadformat = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_template);
						#-------------------------------------------------------------------------#
						# Activar la hoja con la que se trabajará
						$var_original = $var_spreadformat->setActiveSheetIndex(0);
						# Ciclo para recorrer los datos y vaciarlos
						for ($var_row = 2; $var_row <= 501; $var_row++) { 
							# Asignar valores a las celdas de excel
							$var_original->setCellValue('A' . $var_row, html_entity_decode(''));
							$var_original->setCellValue('B' . $var_row, html_entity_decode(''));
						}
						#-------------------------------------------------------------------------#
						# Activar la hoja con la que se trabajará
						$var_original = $var_spreadformat->setActiveSheetIndex(1);
						# Ciclo para recorrer los datos y vaciarlos
						for ($var_row = 2; $var_row <= 501; $var_row++) { 
							# Asignar valores a las celdas de excel
							$var_original->setCellValue('A' . $var_row, html_entity_decode(''));
							$var_original->setCellValue('B' . $var_row, html_entity_decode(''));
							$var_original->setCellValue('C' . $var_row, html_entity_decode(''));
							$var_original->setCellValue('D' . $var_row, html_entity_decode(''));
							$var_original->setCellValue('E' . $var_row, html_entity_decode(''));
							$var_original->setCellValue('F' . $var_row, html_entity_decode(''));
							$var_original->setCellValue('G' . $var_row, html_entity_decode(''));
						}
						#-------------------------------------------------------------------------#
						# Activar la hoja con la que se trabajará
						$var_original = $var_spreadformat->setActiveSheetIndex(2);
						# Ciclo para recorrer los datos y vaciarlos
						for ($var_row = 2; $var_row <= 501; $var_row++) { 
							# Asignar valores a las celdas de excel
							$var_original->setCellValue('A' . $var_row, html_entity_decode(''));
						}
						#-------------------------------------------------------------------------#
						# Escribir valores sobre las celdas
						$var_writer = new Xlsx($var_spreadformat);
						$var_writer->save($var_template);
						$var_folder = opendir($var_file_route);
						# Recorrer datos del archivo para validacion
						while ($var_element = readdir($var_folder)) {
							if (!is_dir($var_file_route . $var_element)) {
								$var_extension = pathinfo($var_element, PATHINFO_EXTENSION);
								$var_extension = strtolower($var_extension);
							}
						}
						#-------------------------------------------------------------------------#
						# Abrir el archivo para asignarle datos
						$var_spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($var_template);
						#-------------------------------------------------------------------------#
						# Activar la hoja con la que se trabajará
						$var_sheet = $var_spreadsheet->setActiveSheetIndex(0);
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_zv_dashboard->sql_controller_ibn_client();
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $var_row = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet->setCellValue('A' . $var_row, html_entity_decode($value['lbl_azp_ibn_client_t_name']));
								$var_sheet->setCellValue('B' . $var_row, html_entity_decode($value['lbl_azp_ibn_client_t_days']));
								# Incrementar valores
								$var_row++;
							}
						}
						#-------------------------------------------------------------------------#
						# Activar la hoja con la que se trabajará
						$var_sheet = $var_spreadsheet->setActiveSheetIndex(1);
						# Consultar registros de la tabla por medio del modelo instanciado
						$var_sql = $var_m_zv_dashboard->sql_controller_ibn_control_panel($var_date_since, $var_date_until);
						# Validar si la variable es correcta y no falsa
						if (false != $var_sql) { $var_row = 2;
							# Recorrer datos de la base
							foreach ($var_sql as $key => $value) {
								# Asignar valores a las celdas de excel
								$var_sheet->setCellValue('A' . $var_row, html_entity_decode($value['lbl_azp_ibn_client_t_name']));
								$var_sheet->setCellValue('B' . $var_row, html_entity_decode($value['lbl_azp_ibn_control_panel_t_code_research']));
								$var_sheet->setCellValue('C' . $var_row, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_arrival']));
								$var_sheet->setCellValue('D' . $var_row, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_reply']));
								$var_sheet->setCellValue('E' . $var_row, html_entity_decode($value['lbl_azp_ibn_control_panel_t_date_general']));
								$var_sheet->setCellValue('F' . $var_row, html_entity_decode($value['lbl_azp_ibn_control_panel_t_register']));
								$var_sheet->setCellValue('G' . $var_row, html_entity_decode('0'));
								# Incrementar valores
								$var_row++;
							}
						}
						#-------------------------------------------------------------------------#
						# Activar la hoja con la que se trabajará
						$var_sheet = $var_spreadsheet->setActiveSheetIndex(2);
						# Ciclo para recorrer los datos y vaciarlos
						for ($var_row = 2; $var_row <= 501; $var_row++) { 
							# Asignar valores a las celdas de excel
							$var_sheet->setCellValue('A' . $var_row, html_entity_decode('2000-01-01'));
						}
						#-------------------------------------------------------------------------#
						# Escribir valores sobre las celdas
						$var_writer = new Xlsx($var_spreadsheet);
						$var_writer->save($var_template);
						$var_folder = opendir($var_file_route);
						# Recorrer datos del archivo para validacion
						while ($var_element = readdir($var_folder)) {
							if (!is_dir($var_file_route . $var_element)) {
								$var_extension = pathinfo($var_element, PATHINFO_EXTENSION);
								$var_extension = strtolower($var_extension);
							}
						}
						#-------------------------------------------------------------------------#
						# Consultar helper y sus opciones
						Helper::load('files');
						# Ruta principal de la carpeta
						$var_ec_route = 'systemfiles/filesproject/';
						# Ruta de la carpeta principal
						$var_ec_folder = 'azp_ibn_format_gantt/';
						# Carpeta del año
						$var_ec_year = YEAR . '/';
						# Carpeta del año y mes
						$var_ec_month = YEAR_MONTH . '/';
						# Carpeta del año, mes y día
						$var_ec_date = DATE . '/';
						# Carpeta de archivos
						$var_ec_hour = HOUR_NUMBER . '/';
						#-------------------------------------------------------------------------#
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
						# Creacion de carpetas en el desarrollo
						Files::create_dir($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date . $var_ec_hour, 0777);
						# Ruta de la carpeta para almacenar sus respectivos archivos
						$var_route_new = $var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date . $var_ec_hour;
						#-------------------------------------------------------------------------#
						# Asignacion del nuevo nombre del archivo
						$var_new_gantt = DATE_NUMBER . '_' . HOUR_NUMBER . '.xlsx';
						# Documento Excel Formato
						$var_doc_gantt = 'systemfiles/filesimport/investigation/Formato Gantt.xlsx';
						# Copiar archivos de una ruta a otra
						copy($var_doc_gantt, $var_route_new . $var_new_gantt);
						# Asignacion del nuevo nombre del archivo
						$var_new_panel = 'Formato Tablero.xlsx';
						# Documento Excel Formato
						$var_doc_panel = 'systemfiles/filesimport/investigation/Formato Tablero.xlsx';
						# Copiar archivos de una ruta a otra
						copy($var_doc_panel, $var_route_new . $var_new_panel);
						#-------------------------------------------------------------------------#
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_year, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_ec_route . $var_ec_folder . $var_ec_year . $var_ec_month . $var_ec_date . $var_ec_hour, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_route_new . $var_new_gantt, 0777);
						# Dar permisos a la carpeta y archivo
						chmod($var_route_new . $var_new_panel, 0777);
						# Enviar datos al controlador en el modelo
						$var_m_zv_dashboard->sql_controller_ibn_format_gantt_file($var_date_month, $var_route_new, $var_new_gantt);
					case 'cpcamera':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_ibn_capture_camera();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'capdetail':
						# Control para validar el id
						if ($this->isset_id) {
							# Definir una variable con un valor
							$var_assigned = 0;
							# Consultar registros de la tabla por medio del modelo instanciado
							$var_ver = $var_m_zv_dashboard->sql_ibn_capture_detail();
							# Recorrer los datos de la consulta de la tabla para validacion de existencia
							if (false != $var_ver) { foreach ($var_ver as $key => $value) { $var_assigned = 1; } }
							# Validacion de si existe mas de un dato para encodificarlos
							if ($var_assigned == 0) { echo '{"status":false,"data":{}}'; } else {
								# Consultar registros de la tabla por medio del modelo instanciado
								$variable = $var_m_zv_dashboard->sql_ibn_capture_detail();
								# Imprimir una variable adicional
								echo $var_start = '{"status":true,"data":';
								# Recorrer los datos de la consulta de la tabla y encodificarlos
								foreach ($variable as $key => $value) { echo json_encode($value, JSON_FORCE_OBJECT, JSON_UNESCAPED_UNICODE); }
								# Imprimir una variable adicional
								echo $var_end = '}';
							}
							# Finalizar el codigo
							exit();
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . str_replace("api", "", $var_controller) . 'query/');
							# Detener la ejecucion
							exit();
						}
					case 'cpproperty':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_ibn_capture_property();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'cpvehicle':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_ibn_capture_vehicle();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'query':
						# Control para validar el acceso a los resultados de la base de datos
						if (false != $var_m_zz_design->sql_permits_value_error($var_controller)) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/message/query');
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'info/access/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'gscgpcausals':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_causal_s();
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { array_push($arrayName,array($value['lbl_state'], $value['lbl_count'],),); }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName, JSON_NUMERIC_CHECK);
						# Detener la ejecucion
						exit();
						break;
					case 'gsccausals':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_causal_s();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'gsccausali':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_causal_i();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'gscdtcausals':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_causal_dt_s();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					case 'gscdtcausali':
						# Consultar registros de la tabla por medio del modelo instanciado
						$variable = $var_m_zv_dashboard->sql_controller_causal_dt_i();
						# Imprimir una variable adicional
						echo $var_start = '{"data":';
						# Valores del array vacios
						$arrayName = array();
						# Recorrer los datos de la consulta de la tabla y encodificarlos
						foreach ($variable as $key => $value) { $arrayName[] = $value; }
						# Encodificar el ultimo resultado sin añadir una coma
						echo json_encode($arrayName);
						# Imprimir una variable adicional
						echo $var_end = '}';
						# Finalizar el codigo
						exit();
						break;
					default:
						# Redireccionar a una pagina segun el metodo cargado
						Func::redir(URL . $var_controller . 'main/');
						# Detener la ejecucion
						exit();
						break;
				}
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . $var_controller . 'main/');
				# Detener la ejecucion
				exit();
			}
		}
	}
?>