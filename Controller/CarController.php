<?php
require_once "./Model/CarModel.php";
require_once "./Model/BrandModel.php";
require_once "./View/CarView.php";
require_once "./Helpers/AuthHelper.php";

class CarController{

    private $model;
    private $view;
    private $modelBrand;
    

    function __construct(){
        $this->model = new CarModel();
        $this->view = new CarView();
        $this->modelBrand = new BrandModel();
        
    }

    function showHome(){
        $cars = $this->model->getCars();
        $brands = $this->modelBrand->getBrands();
        $this->view->showCars($cars,$brands);
    }

    function showModel($id){
        $car = $this-> model-> getCar($id);
        $this->view->showCar($car);
    }
    function showModels(){
        $cars = $this->model->getCars();
        $this->view->showModels($cars);
    }

    function addCar() {
        $cars = $this->model->getCars();
        $brands = $this->modelBrand->getBrands();
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        if (isset($modelo) && !empty($modelo) && isset($marca) && !empty($marca) && isset($precio) && !empty($precio) && isset($descripcion) && !empty($descripcion)){
        $this->model->insertCar($modelo, $descripcion, $precio, $marca);
        header("Location: " . BASE_URL);
        }else{
            $this->view->showCars($cars,$brands,"Complete todos los campos por favor!!");
        }
    }

    function deleteCar($id){
        $this->model->deleteCarDb($id);
        header("Location: " . BASE_URL);
    }


    function showFormEditCar($id) {
        $brands = $this->modelBrand->getBrands();
        $car = $this-> model-> getCar($id);
        $this->view->showFormEdit($brands,$car);
    }

    function updateCar() {
        $id = $_POST['id'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $this->model->editCarById($modelo, $descripcion, $precio, $marca,$id);
        header("Location: " . BASE_URL);   
    }

}
