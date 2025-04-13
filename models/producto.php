<?php
include_once 'conexion.php';

class Productos extends Conexion{
    public $producto_id; 
    public $producto_nombre;
    public $producto_precio; 
    public $producto_cantidad;
    public $producto_situacion;


    public function __construct($args = []){
        $this->producto_id = $args['producto_id'] ?? null;
        $this->producto_nombre = $args['producto_nombre'] ?? '';
        $this->producto_precio = $args['producto_precio'] ?? '';
        $this->producto_cantidad = $args['producto_cantidad'] ?? '';
        $this->producto_situacion = $args['producto_situacion'] ?? 1; 
        
    }
    public function guardar(){
        $sql = "INSERT INTO productos(producto_nombre, producto_precio, producto_cantidad, producto_situacion)
        VALUES ('$this->producto_nombre', '$this->producto_precio', '$this->producto_cantidad', '$this->producto_situacion')";
        
        
        $date = $this->ejecutar($sql);
        return $date;
    }
}
?>