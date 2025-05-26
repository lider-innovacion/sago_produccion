<?php
    # Mostrar el current path actual
    //echo '<span style="color: blue;">Current Path: </span>' . CURRENT_PATH . '<br>';

    # Elimina las barras diagonales al principio y al final de CURRENT_PATH si existen
    $cleanPath = trim(CURRENT_PATH, '/');

    # Contar cuántos niveles de directorio tiene CURRENT_PATH
    # Si $cleanPath está vacío, significa que estamos en el directorio raíz y no necesitamos subir niveles
    $pathSegments = !empty($cleanPath) ? explode('/', $cleanPath) : [];

    # Definir ROUTE basado en la cantidad de segmentos del path
    # Por cada segmento del path (es decir, cada subdirectorio), agregamos un '../' a la constante ROUTE
    $route = str_repeat('../', count($pathSegments));

    # Definir la constante ROUTE
    define('ROUTE', !empty($route) ? rtrim($route, '/') : '.');

    # Mostrar el valor final de ROUTE
    //echo '<span style="color: blue;">Route: </span>' . ROUTE . '<br>';
    