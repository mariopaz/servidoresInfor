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

   // Funcion obtener destacados

}