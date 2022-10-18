<?php

class BrandModel{
    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_car;charset=utf8', 'root', '');
    }
function getBrands (){
    $sentencia = $this->db->prepare( "select * from marca ");
    $sentencia -> execute();
    $brands = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $brands;

}
function getBrand ($id){
    $sentencia = $this->db->prepare( "select * from marca WHERE id_marca=?");
    $sentencia -> execute(array($id));
    $brand = $sentencia->fetch(PDO::FETCH_OBJ);
    return $brand; 
}
function getModelbyBrand($id){
    $sentencia = $this->db->prepare( "select c.id,c.modelo,c.descripcion,c.precio,m.nombre as marca,m.id_marca from vehiculos c join marca m on c.marca=m.id_marca WHERE m.id_marca = ?");    $sentencia -> execute(array($id));
    $modelos = $sentencia->fetchALL(PDO::FETCH_OBJ); 
    return $modelos;
}

    function insertBrandDB($nombre){
        $sentencia = $this->db->prepare("INSERT INTO marca(nombre) VALUES(?)");
        $sentencia->execute(array($nombre));
    }

    function deleteBrandDB($id){
        $sentencia = $this->db->prepare("DELETE FROM marca WHERE id_marca=?");
        $sentencia->execute(array($id,));
    }

    function editBrandDB($nombre,$id){
        $sentencia = $this->db->prepare("UPDATE marca SET nombre=? WHERE id_marca=?");
        $sentencia->execute(array($nombre,$id));
    }
}
