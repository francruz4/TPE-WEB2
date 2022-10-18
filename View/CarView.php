<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class carView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showCars($cars,$brands,$error=null){
        $this->smarty->assign('titulo', 'Catalogo');        
        $this->smarty->assign('cars', $cars);
        $this->smarty->assign('brands', $brands);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/cars.tpl');
    }

    function showCar($car){    
        $this->smarty->assign('car', $car);
        $this->smarty->display('templates/showCar.tpl');
    }
    function showModels($cars){
        $this->smarty->assign('titulo', 'Lista de vehiculos');        
        $this->smarty->assign('cars', $cars);
        $this->smarty->display('templates/showModels.tpl');
    }
    function showFormEdit($brands,$car,$error=null){    
        $this->smarty->assign('car', $car);
        $this->smarty->assign('brands', $brands);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formEditCar.tpl');
    }
}   