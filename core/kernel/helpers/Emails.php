<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class Emails {
		/**
		* FUNCIÓN NO ACCESIBLE, USO ESTRICTO PARA UNA FUNCIÓN INTERNA DEL HELPER
		* Inicializa la clase PHPMailer y las configuraciones necesarias
		* Método privado utilizado en todo el Helper
		*
		* @param bool $is_smtp: Define si se hará la conexión a través de SMTP o no
		*
		* @return PHPMailer object, retorna un objeto de la clase PHPMailer
		*/

		#-----------------------------------------------------------------------------
		final private static function init(bool $is_smtp = true) : PHPMailer {
			$mail = new PHPMailer;
			$mail->CharSet = "UTF-8";
			$mail->Encoding = "quoted-printable";
			if ($is_smtp) {
				$mail->isSMTP();
				$mail->SMTPDebug = 0;
				$mail->SMTPAuth = true;
				$mail->Host = PHPMAILER_HOST;
				$mail->Username = PHPMAILER_USER;
				$mail->Password = PHPMAILER_PASS;
				$mail->Port = PHPMAILER_PORT;
				$mail->SMTPSecure = PHPMAILER_SMTP_SECURE;
				$mail->SMTPOptions = array(
					PHPMAILER_SMTP_SECURE => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true,
					)
				);
			} else {
				$mail->isSendMail();
			}
			return $mail;
		}

		#-----------------------------------------------------------------------------
		final public static function send_mail(array $dest, string $HTML, string $titulo, bool $is_smtp = true, array $adj = []) {
			$mail = self::init($is_smtp);
			$mail->setFrom(PHPMAILER_USER, APP);
			foreach ($dest as $email => $name) {
				$mail->addAddress($email, $name);
			}
			$mail->isHTML(true);
			$mail->Subject = $titulo;
			$mail->Body = $HTML;
			if (sizeof($adj)) {
				foreach ($adj as $ruta) {
					$mail->AddAttachment($ruta);
				}
			}
			if (!$mail->send()) {
				return $mail->ErrorInfo;
			} else {
				return true;
			}
		}

		#-----------------------------------------------------------------------------
		final public static function send_mail_copy(string $from_name, array $dest, array $copy, string $HTML, string $titulo, bool $is_smtp = true, array $adj = []) {
			$mail = self::init($is_smtp);
			$mail->setFrom(PHPMAILER_USER, $from_name);
			foreach ($dest as $email => $name) {
				$mail->addAddress($email, $name);
			}
			foreach ($copy as $email_copy => $name_copy) {
				$mail->addCC($email_copy, $name_copy);
			}
			$mail->isHTML(true);
			$mail->Subject = $titulo;
			$mail->Body = $HTML;
			if (sizeof($adj)) {
				foreach ($adj as $ruta) {
					$mail->AddAttachment($ruta);
				}
			}
			if (!$mail->send()) {
				return $mail->ErrorInfo;
			} else {
				return true;
			}
		}

		#-----------------------------------------------------------------------------
		final public static function send_mail_adj(string $from_name, array $dest, array $copy, string $HTML, string $titulo, bool $is_smtp = true, array $adj) {
			$mail = self::init($is_smtp);
			$mail->setFrom(PHPMAILER_USER, $from_name);
			foreach ($dest as $email => $name) {
				$mail->addAddress($email, $name);
			}
			foreach ($copy as $email_copy => $name_copy) {
				$mail->addCC($email_copy, $name_copy);
			}
			$mail->isHTML(true);
			$mail->Subject = $titulo;
			$mail->Body = $HTML;
			if (sizeof($adj)) {
				foreach ($adj as $ruta => $route) {
					$mail->AddAttachment($ruta, $route);
				}
			}
			if (!$mail->send()) {
				return $mail->ErrorInfo;
			} else {
				return true;
			}
		}

		#-----------------------------------------------------------------------------
		final private static function ismtp(array $smtp, bool $is_smtp = true) : PHPMailer {
			$mail = new PHPMailer;
			$mail->CharSet = "UTF-8";
			$mail->Encoding = "quoted-printable";
			if ($is_smtp) {
				$mail->isSMTP();
				$mail->SMTPDebug = 0;
				$mail->SMTPAuth = true;
				$mail->Host = $smtp[0];
				$mail->Username = $smtp[1];
				$mail->Password = $smtp[2];
				$mail->Port = $smtp[3];
				$mail->SMTPSecure = $smtp[4];
				$mail->SMTPOptions = array(
					$smtp[4] => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true,
					)
				);
			} else {
				$mail->isSendMail();
			}
			return $mail;
		}

		#-----------------------------------------------------------------------------
		final public static function send_mail_file(array $smtp, string $from_email, string $from_name, array $dest, array $copy, string $HTML, string $titulo, bool $is_smtp = true, array $adj) {
			$mail = self::ismtp($smtp, $is_smtp);
			$mail->setFrom($from_email, $from_name);
			foreach ($dest as $email => $name) {
				$mail->addAddress($email, $name);
			}
			foreach ($copy as $email_copy => $name_copy) {
				$mail->addCC($email_copy, $name_copy);
			}
			$mail->isHTML(true);
			$mail->Subject = $titulo;
			$mail->Body = $HTML;
			if (sizeof($adj)) {
				foreach ($adj as $ruta => $route) {
					$mail->AddAttachment($ruta, $route);
				}
			}
			if (!$mail->send()) {
				return $mail->ErrorInfo;
			} else {
				return true;
			}
		}

		#-----------------------------------------------------------------------------
		# Plantilla estándar que muestra de forma amigable el texto, utiliza bootstrap
		final public static function plantilla(string $var_content) : string {
			return '
				<!DOCTYPE html>
				<html lang="en">
					<head>
						<meta charset="utf-8">
						<title>' . APP . '</title>

						<meta name="description" content="Export">
						<meta http-equiv="X-UA-Compatible" content="IE=edge">
						<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
						<meta name="apple-mobile-web-app-capable" content="yes" />
						<meta name="msapplication-tap-highlight" content="no">

						<link id="vendorsbundle" rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/vendors.bundle.css">
						<link id="appbundle" rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/app.bundle.css">
						<link id="mytheme" rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/themes/cust-theme-4.css">
						<link id="myskin" rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/skins/skin-master.css">

						<link rel="apple-touch-icon" sizes="180x180" href="' . URL . 'views/templates/smart/dist/img/favicon/apple-touch-icon.png">
						<link rel="icon" type="image/png" sizes="32x32" href="' . URL . 'views/templates/smart/dist/img/favicon/favicon-32x32.png">
						<link rel="mask-icon" href="' . URL . 'views/templates/smart/dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">

						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/datagrid/datatables/datatables.bundle.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/notifications/sweetalert2/sweetalert2.bundle.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/formplugins/select2/select2.bundle.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/notifications/toastr/toastr.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/statistics/chartjs/chartjs.css">

						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/fa-brands.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/fa-duotone.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/fa-light.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/fa-regular.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/fa-solid.css">
					</head>
					<body class="mod-bg-1 mod-nav-link header-function-fixed nav-function-fixed footer-function-fixed mod-clean-page-bg nav-function-hidden">
						<div class="page-wrapper">
							<div class="page-inner">
								<div class="page-content-wrapper">
									<main id="js-page-content" role="main" class="page-content">
										' . $var_content . '
									</main>
									<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
									<footer class="page-footer" role="contentinfo">
										<div class="d-flex align-items-center flex-1 text-muted">
											<span class="hidden-md-down fw-700">
												<a href="' . URL . '" class="text-primary fw-500" title="' . URL . '">
													' . APP . '
												</a> <span>2021 © Desarrollado Por BranderIdeas</span>
											</span>
										</div>
									</footer>
								</div>
							</div>
						</div>
						<script src="' . URL . 'views/templates/smart/dist/js/vendors.bundle.js"></script>
						<script src="' . URL . 'views/templates/smart/dist/js/app.bundle.js"></script>
					</body>
				</html>
			';
		}

		#-----------------------------------------------------------------------------
		# Plantilla estándar que muestra de forma amigable el texto, utiliza bootstrap
		final public static function template_email_gsc(string $var_content) : string {
			return '
				<!DOCTYPE html>
				<html lang="es" class="root-text-sm">
					<head>
						<base href="' . URL . '" />
						<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
						<title>' .  APP . '</title>

						<meta name="description" content="Export">
						<meta http-equiv="X-UA-Compatible" content="IE=edge">
						<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
						<meta name="apple-mobile-web-app-capable" content="yes" />
						<meta name="msapplication-tap-highlight" content="no">

						<link id="vendorsbundle" rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/vendors.bundle.css">
						<link id="appbundle" rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/app.bundle.css">
						<link id="mytheme" rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/themes/cust-theme-4.css">
						<link id="myskin" rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/skins/skin-master.css">

						<link rel="apple-touch-icon" sizes="180x180" href="' . URL . 'views/templates/smart/dist/img/favicon/apple-touch-icon.png">
						<link rel="icon" type="image/png" sizes="32x32" href="' . URL . 'views/templates/smart/dist/img/favicon/favicon-32x32.png">
						<link rel="mask-icon" href="' . URL . 'views/templates/smart/dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">

						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/datagrid/datatables/datatables.bundle.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/notifications/sweetalert2/sweetalert2.bundle.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/formplugins/select2/select2.bundle.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/notifications/toastr/toastr.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/statistics/chartjs/chartjs.css">

						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/fa-brands.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/fa-duotone.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/fa-light.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/fa-regular.css">
						<link rel="stylesheet" media="screen, print" href="' . URL . 'views/templates/smart/dist/css/fa-solid.css">
						
						<script>const var_url = "' . URL . '"</script>
					</head>
					<body class="mod-bg-1 mod-nav-link header-function-fixed nav-function-fixed footer-function-fixed mod-clean-page-bg nav-function-hidden">
						<div class="page-wrapper">
							<div class="page-inner">
								<div class="page-content-wrapper">
									<main id="js-page-content" role="main" class="page-content">
										' . $var_content . '
									</main>
									<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
									<footer class="page-footer" role="contentinfo">
										<div class="d-flex align-items-center flex-1 text-muted">
											<span class="hidden-md-down fw-700">
												<a href="' . URL . '" class="text-primary fw-500" title="' . URL . '">
													' . APP . '
												</a> <span>2021 © Desarrollado Por BranderIdeas</span>
											</span>
										</div>
									</footer>
								</div>
							</div>
						</div>
						<script src="' . URL . 'views/templates/smart/dist/js/vendors.bundle.js"></script>
						<script src="' . URL . 'views/templates/smart/dist/js/app.bundle.js"></script>
					</body>
				</html>
			';
		}












		#-----------------------------------------------------------------------------
		# Funcionalidad de los datos principales
		final private static function main_init(bool $var_init, array $var_info) : PHPMailer {
			#-------------------------------------------
			$var_host = $var_info[0]; $var_user = $var_info[1]; $var_pass = $var_info[2];
			#-------------------------------------------
			$var_port = $var_info[3]; $var_secure = $var_info[4];
			#-------------------------------------------
			$var_mail = new PHPMailer;
			#-------------------------------------------
			$var_mail->CharSet = "UTF-8";
			#-------------------------------------------
			$var_mail->Encoding = "quoted-printable";
			#-------------------------------------------
			if ($var_init) {
				$var_mail->isSMTP();
				$var_mail->SMTPAuth = true;
				$var_mail->Host = $var_host;
				$var_mail->Username = $var_user;
				$var_mail->Password = $var_pass;
				$var_mail->Port = $var_port;
				$var_mail->SMTPSecure = $var_secure;
				$var_mail->SMTPOptions = array(
					$var_secure => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true,
					),
				);
			} else { $var_mail->isSendMail(); }
			#-------------------------------------------
			return $var_mail;
		}

		#-----------------------------------------------------------------------------
		# 
		final public static function main_send(array $var_init, array $var_from, array $var_dest, array $var_copy, string $var_html, string $var_topic, array $var_adj = []) {
			#-------------------------------------------
			$var_info = array($var_init[0], $var_init[1], $var_init[2], $var_init[3], $var_init[4],);
			#-------------------------------------------
			$var_mail = self::main_init(true, $var_info);
			#-------------------------------------------
			$var_mail->isHTML(true);
			#-------------------------------------------
			foreach ($var_from as $key => $value) { $var_mail->setFrom($key, $value); }
			#-------------------------------------------
			foreach ($var_dest as $key => $value) { $var_mail->addAddress($key, $value); }
			#-------------------------------------------
			foreach ($var_copy as $key => $value) { $var_mail->addCC($key, $value); }
			#-------------------------------------------
			$var_mail->Body = $var_html;
			#-------------------------------------------
			$var_mail->Subject = $var_topic;
			#-------------------------------------------
			if (sizeof($var_adj)) { foreach ($var_adj as $key => $value) { $var_mail->AddAttachment($key, $value); } }
			#-------------------------------------------
			if (!$var_mail->send()) { return $var_mail->ErrorInfo; } else { return true; }
			#-------------------------------------------
		}
		
		#-----------------------------------------------------------------------------
		final public static function main_template(string $var_content) : string {
			return '
				<!DOCTYPE html>
				<html lang="en">
					<head>
						<base href="' . URL . '" />
						<meta charset="utf-8" />
						<title>' . APP . '</title>
						<meta name="viewport" content="width=device-width, initial-scale=1.0">
						<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
						<meta content="Coderthemes" name="author" />
						<meta http-equiv="X-UA-Compatible" content="IE=edge" />
						<link rel="shortcut icon" href="' . URL . 'views/frontend/images/favicon.ico">
						<link rel="stylesheet" href="' . URL . 'views/frontend/css/bootstrap.min.css" type="text/css">
						<link rel="stylesheet" type="text/css" href="' . URL . 'views/frontend/css/materialdesignicons.min.css" />
						<link rel="stylesheet" type="text/css" href="' . URL . 'views/frontend/css/pe-icon-7-stroke.css" />
						<link rel="stylesheet" type="text/css" href="' . URL . 'views/frontend/css/style.css" />
					</head>
					<body>
						<section class="bg-home bg-primary">
							<div class="container-fluid">
								<div class="row justify-content-center">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										' . $var_content . '
									</div>
								</div>
							</div>
						</section>
						<footer class="bg-dark footer text-white">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-12">
										<div class="py-4">
											<div class="text-center">
												<p class="text-white-50">2019 - ' . date('Y') . ' &copy;' . APP . '</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</footer>
						<script src="' . URL . 'views/frontend/js/jquery.min.js"></script>
						<script src="' . URL . 'views/frontend/js/bootstrap.bundle.min.js"></script>
						<script src="' . URL . 'views/frontend/js/jquery.easing.min.js"></script>
						<script src="' . URL . 'views/frontend/js/scrollspy.min.js"></script>
						<script src="' . URL . 'views/frontend/js/app.js"></script>
						<script src="' . URL . 'views/app/js/jquery.numeric.js"></script>
					</body>
				</html>
			';
		}

		#-----------------------------------------------------------------------------
		final private static function test_init(bool $var_init, array $var_info) : PHPMailer {
			#-------------------------------------------
			$var_host = $var_info[0]; $var_user = $var_info[1]; $var_pass = $var_info[2];
			#-------------------------------------------
			$var_port = $var_info[3]; $var_secure = $var_info[4];
			#-------------------------------------------
			$var_mail = new PHPMailer;
			#-------------------------------------------
			$var_mail->CharSet = "UTF-8";
			#-------------------------------------------
			$var_mail->Encoding = "quoted-printable";
			#-------------------------------------------
			if ($var_init) {
				$var_mail->isSMTP();
				$var_mail->SMTPAuth = true;
				$var_mail->Host = $var_host;
				$var_mail->Username = $var_user;
				$var_mail->Password = $var_pass;
				$var_mail->Port = $var_port;
				$var_mail->SMTPSecure = $var_secure;
				$var_mail->SMTPOptions = array(
					$var_secure => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true,
					),
				);
			} else { $var_mail->isSendMail(); }
			#-------------------------------------------
			return $var_mail;
		}
		
		#-----------------------------------------------------------------------------
		final public static function test_send(array $var_init, array $var_from, array $var_dest, array $var_copy, string $var_html, string $var_topic, array $var_adj = []) {
			#-------------------------------------------
			$var_info = array($var_init[0], $var_init[1], $var_init[2], $var_init[3], $var_init[4],);
			#-------------------------------------------
			$var_mail = self::test_init(true, $var_info);
			#-------------------------------------------
			$var_mail->isHTML(true);
			#-------------------------------------------
			foreach ($var_from as $key => $value) { $var_mail->setFrom($key, $value); }
			#-------------------------------------------
			foreach ($var_dest as $key => $value) { $var_mail->addAddress($key, $value); }
			#-------------------------------------------
			foreach ($var_copy as $key => $value) { $var_mail->addCC($key, $value); }
			#-------------------------------------------
			$var_mail->Body = $var_html;
			#-------------------------------------------
			$var_mail->Subject = $var_topic;
			#-------------------------------------------
			if (sizeof($var_adj)) { foreach ($var_adj as $key => $value) { $var_mail->AddAttachment($key, $value); } }
			#-------------------------------------------
			if (!$var_mail->send()) { return $var_mail->ErrorInfo; } else { return true; }
			#-------------------------------------------
		}
		
		#-----------------------------------------------------------------------------
		final public static function test_template(string $var_content) : string {
			return '
				<!DOCTYPE html>
				<html lang="en">
					<head>
						<base href="' . URL . '" />
						<meta charset="utf-8" />
						<title>' . APP . '</title>
						<meta name="viewport" content="width=device-width, initial-scale=1.0">
						<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
						<meta content="Coderthemes" name="author" />
						<meta http-equiv="X-UA-Compatible" content="IE=edge" />
						<link rel="shortcut icon" href="' . URL . 'views/frontend/images/favicon.ico">
						<link rel="stylesheet" href="' . URL . 'views/frontend/css/bootstrap.min.css" type="text/css">
						<link rel="stylesheet" type="text/css" href="' . URL . 'views/frontend/css/materialdesignicons.min.css" />
						<link rel="stylesheet" type="text/css" href="' . URL . 'views/frontend/css/pe-icon-7-stroke.css" />
						<link rel="stylesheet" type="text/css" href="' . URL . 'views/frontend/css/style.css" />
					</head>
					<body>
						<section class="bg-home bg-primary">
							<div class="container-fluid">
								<div class="row justify-content-center">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										' . $var_content . '
									</div>
								</div>
							</div>
						</section>
						<footer class="bg-dark footer text-white">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-12">
										<div class="py-4">
											<div class="text-center">
												<p class="text-white-50">2019 - ' . date('Y') . ' &copy;' . APP . '</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</footer>
						<script src="' . URL . 'views/frontend/js/jquery.min.js"></script>
						<script src="' . URL . 'views/frontend/js/bootstrap.bundle.min.js"></script>
						<script src="' . URL . 'views/frontend/js/jquery.easing.min.js"></script>
						<script src="' . URL . 'views/frontend/js/scrollspy.min.js"></script>
						<script src="' . URL . 'views/frontend/js/app.js"></script>
						<script src="' . URL . 'views/app/js/jquery.numeric.js"></script>
					</body>
				</html>
			';
		}
	}
?>