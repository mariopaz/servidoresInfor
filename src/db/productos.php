<?php
require "conexion.php";
class Productos
{
   private $conexion;
   private $redis;
   function __construct(){
      $this->conexion = (new Conexion())->conectar();
      $this->redis = new Redis();
      $this->redis->connect('redis', 6379);
   }
   // Funcion obtener por categoria

   function obtenerC($categoria){
      
      if(!$this->redis->get($categoria)) {
         $sql  = "SELECT * FROM productos WHERE categoria = '".$categoria."' ";
        
         $consulta = $this->conexion->query($sql);
         $datos = $consulta->fetch_all(MYSQLI_ASSOC);
         $this->redis->set($categoria, serialize($datos));
         $this->redis->expire($categoria, 120);
         return $datos;
      } else {
         return unserialize($this->redis->get($categoria));
      }
}

   // Funcion obtener destacados

}