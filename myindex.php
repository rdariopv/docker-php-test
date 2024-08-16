<?php
// Mostrar errores (solo para desarrollo)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir archivos necesarios
require_once './src/Auth/AuthController.php';
require_once './src/Auth/PackController.php';

// Obtener la URL solicitada
$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Ruta y controlador básico
if ($request === '/login' && $method === 'POST') {
    $controller = new AuthController();
    $controller->login();
} 
else if($request === '/getorderpack' && $method === 'POST'){
	$controller = new PackController();
    $controller->getOrderPack();
}
else if($request === '/setstate' && $method === 'POST'){
	$controller = new PackController();
    $controller->setstate();
}
else
{
	if ($request === '/index' && $method === 'GET'){
		include './views/home.php';
	}else if ($request === '/' && $method === 'GET'){
		include './views/home.php';
		//echo 'hola desde mi contenedor docker php';
		//phpinfo();
	}else{
		 header("HTTP/1.1 404 Not Found");
         echo json_encode(["message" => "Endpoint not found"]);
	}
}
