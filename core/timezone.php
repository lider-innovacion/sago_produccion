<?php
	
	# Timezone DOC http://php.net/manual/es/timezones.php
	date_default_timezone_set('America/Bogota');
	
    # Almacenar el año actual en formato de cuatro dígitos (YYYY)
    define('TZYEAR', date('Y'));
    # Almacenar el año y el mes actual en formato 'YYYY-MM'
    define('TZYEARMONTH', date('Y-m'));
    # Almacenar la fecha actual en formato 'YYYY-MM-DD'
    define('TZDATE', date('Y-m-d'));
    # Almacenar la hora actual en formato de 24 horas 'HH:MM:SS'
    define('TZHOUR', date('H:i:s'));
    # Almacenar la fecha y hora actual en formato 'YYYY-MM-DD HH:MM:SS'
    define('TZDATEHOUR', date('Y-m-d H:i:s'));
    # Almacenar la fecha actual sin guiones, en formato 'YYYYMMDD'
    define('TZDATENRO', date('Ymd'));
    # Almacenar la hora actual sin dos puntos, en formato 'HHMMSS'
    define('TZHOURNRO', date('His'));
	
	# Almacenar el año actual en formato 'YYYY'
	define('YEAR', date('Y'));
	# Almacenar el año y el mes actual en formato 'YYYY-MM'
	define('YEAR_MONTH', date('Y-m'));
	# Almacenar la fecha actual en formato 'YYYY-MM-DD'
	define('DATE', date('Y-m-d'));
	# Almacenar la hora actual en formato 'HH:MM:SS'
	define('HOUR', date('H:i:s'));
	# Almacenar la fecha y hora actual en formato 'YYYY-MM-DD HH:MM:SS'
	define('DATE_HOUR', date('Y-m-d H:i:s'));
	# Almacenar la fecha actual sin guiones en formato 'YYYYMMDD'
	define('DATE_NUMBER', date('Ymd'));
	# Almacenar la hora actual sin dos puntos en formato 'HHMMSS'
	define('HOUR_NUMBER', date('His'));
	# Almacenar la fecha actual en formato 'DD_MM_YYYY'
	define('ITEM_DATE_NUMBER', date('d_m_Y'));