<?php

class CarModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_car;charset=utf8', 'root', '');
    }

    function getCars(){
        $sentencia = $this->db->prepare( "select c.id,c.modelo,c.descripcion,c.precio,m.nombre as marca,m.id_marca from vehiculos c join marca m on c.marca=m.id_marca");
        $sentencia->execute();
        $cars = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $cars;
    } 

    function getCar($id){
        $sentencia = $this->db->prepare( "select c.id,c.modelo,c.descripcion,c.precio,m.nombre as marca,m.id_marca from vehiculos c join marca m on c.marca=m.id_marca WHERE c.id = ?");
        $sentencia->execute(array($id));
        $car = $sentencia->fetch(PDO::FETCH_OBJ);
        return $car;
    }

    function insertCar($modelo, $descripcion, $precio, $marca) {
        $query = $this->db->prepare("INSERT INTO vehiculos (modelo, descripcion, precio, marca) VALUES (?, ?, ?, ?)");
        $query->execute([$modelo, $descripcion, $precio, $marca]);
    }
    
    function deleteCarDB($id) {
        $query = $this->db->prepare("DELETE FROM vehiculos WHERE id = ?");
        $query->execute([$id]);
    }
    function editCarById($modelo, $descripcion, $precio, $marca,$id) {
        $query = $this->db->prepare("UPDATE vehiculos SET modelo = ? , descripcion = ? , precio = ? , marca = ? WHERE id = ?");
        $query->execute([$modelo, $descripcion, $precio, $marca,$id]);
    }

}