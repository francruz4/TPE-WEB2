<?php
require_once "Controller/CarController.php";
require_once "Controller/LoginController.php";
require_once "Controller/BrandController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$CarController = new CarController();
$BrandController = new BrandController();
$LoginController = new LoginController();


// determina que camino seguir según la acción
switch ($params[0]) {

    case 'home': 
        $CarController->showHome(); 
        break;
    case 'login':
        $LoginController->login();
        break;
    case 'logout':
        $LoginController->logout();
        break;
    case 'verify':
        $LoginController->verifyLogin();
        break;
    case 'viewModel': 
        $CarController->showModel($params[1]); 
        break;
    case 'Models': 
        $CarController->showModels(); 
        break;
    case 'Brands': 
        $BrandController->showBrands(); 
        break;
    case 'viewBrand': 
        $BrandController->showBrand($params[1]); 
        break;
    case 'addProd': 
        $CarController->addCar(); 
        break;
    case 'delete': 
        $id = $params[1];
        $CarController->deleteCar($id);
        break;
    case 'edit': 
        $id = $params[1];
        $CarController->showFormEditCar($id);
        break;
    case 'updateCar': 
        $CarController->updateCar();
        break;
    case 'insertBrand': 
        $BrandController->insertBrand(); 
        break;
    case 'deleteBrand': 
        $id = $params[1];
        $BrandController->deleteBrand($id); 
        break;
    case 'editBrand': 
        $id = $params[1];
        $BrandController->editBrand($id); 
        break;
    case 'updateBrand': 
        $BrandController->updateBrand(); 
            break;        
    default: 
        echo('404 Page not found'); 
        break;
    
}


?>