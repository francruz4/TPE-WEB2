<?php
require_once "./Model/BrandModel.php";
require_once "./View/BrandView.php";

class BrandController{

    private $model;
    private $view;
   

    function __construct(){
        $this->model=  new BrandModel();
        $this->view =   new  BrandView();
    }
    function showBrands (){
        $brands = $this->model->getBrands();
        $this->view->showBrands($brands);
    }
    function showBrand($id) {
        $brand =  $this->model->getBrand($id);
        $models=  $this-> model->getModelbyBrand($id);
        $this->view->showBrand($brand, $models);
    }
    function insertBrand(){
        $nombre = $_POST['marca'];
        $this->model->insertBrandDB($nombre);
        $this->view->showListLocation();   
    }
    function deleteBrand($id){
        $this->model-> deleteBrandDB($id);
        $this->view->showListLocation(); 
    }
    function editBrand($id){
        $marca = $this->model->getBrand($id);
        $this->view->showEditBrand($marca);
    }
    function updateBrand(){
       $id= $_POST['id'];
       $nombre=$_POST['nombre'];
        $this->model-> editBrandDB($nombre,$id );
        $this->view->showListLocation();
    }
}