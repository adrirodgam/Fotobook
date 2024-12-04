<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    //imprimir algo
    public function saludar(){
       echo "<h1> Hola mundo </h1>";
    }

    public function saludar2($nombre){
        echo "<h1> Hola $nombre </h1>";
     }

     public function saludar3($nombre, $edad){
        echo "<h1> Hola $nombre </h1>";
        echo ($edad>=18)? "<h1>Eres mayor de edad</h1>" : "<h1>Eres menor de edad</h1>";
     }

     public function calcular($a, $b){
      echo "Numero 1: $a <br>";
      echo "Numero 2: $b <br>";
      echo "Suma: " . ($a + $b) . "<br>";
      echo "Resta: " . ($a - $b) . "<br>";
      echo "Multiplicación: " . ($a * $b) . "<br>";
      echo "División: " . ($b != 0 ? ($a / $b) : "No se puede dividir entre 0") . "<br>";
      
     }
     
     public function calculadora($a, $b, $operacion){
      echo "Numero 1: $a <br>";
      echo "Numero 2: $b <br>";
      echo "<hr>";

      switch($operacion){

         case 's': echo "<br>suma: ". ($a + $b); break;
         case 'r': echo "<br>resta: ". ($a - $b); break;
         case 'm': echo "<br>multiplicacion: ". ($a * $b); break;
         case 'd': echo "<br>division: ". ($a / $b); break;
         default: echo "esa operacion no existe"; break;
         
      }

      
     }


     public function plantilla(){





      return view("plantilla");
     }
     

     
}


//funcion calcular, que tenga dos numeros enteros como parametro en respuesta imrpima, la suma, resta, multiplicacion y division de
//esos 2 numeros