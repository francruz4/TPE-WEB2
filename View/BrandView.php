<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class BrandView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    function showBrands ($brands){
        $this->smarty->assign('titulo', 'Marcas');        
        $this->smarty->assign('brands', $brands);
        $this->smarty->display('templates/showBrands.tpl');
    }
    function showBrand ($brand,$models){      
        $this->smarty->assign('brand', $brand);
        $this->smarty->assign('models', $models);
        $this->smarty->display('templates/showBrand.tpl');
    }
    function showListLocation(){
        header("Location:".BASE_URL. "Brands"); 
    }
    function showEditBrand($marca){
        $this->smarty->assign('titulo','Edite la Marca');
        $this->smarty->assign('marca', $marca);
        $this->smarty->display('templates/formEditBrand.tpl');
    }
}