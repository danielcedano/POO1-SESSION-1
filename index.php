<?php

class coche{
   //variables(atributos)
    public $marca;
public $modelo;
public $color;
public $tipo;
public $puertas;
public $cilindro;
public $kilometraje;
public $encendido;
public $movimiento;

// constructor (llamar todo)
public function __construct($marca,$modelo,$color,$tipo,$puertas,$cilindro,
$kilometraje,$encendido,$movimiento)
{
$this->marca=$marca;
$this->modelo=$modelo; 
$this->color=$color;
$this->tipo=$tipo;
$this->puertas=$puertas;
$this->cilindro=$cilindro;
$this->kilometraje=$kilometraje;
$this->encendido=$encendido;
$this->movimiento=$movimiento;
}

// metodos lo que va a retornar en el mensaje 

public function encender(){
 $this->encendido=true;
    return "coche encendido";
}

public function marchar(){
$this->movimiento=true;
return "coche en movimiento";
}
public function colores(){
    $this->color=true;
    return "color negro";
}

public function kilometros(){
$this->kilometraje=false;
return "el kilometraje es de 21k";

}



}
 //$marca,$modelo,$color,$tipo,$puertas,$cilindro,$kilometraje,$encendido,$movimiento   

// objetos (instancia en especifico) valores reales del objeto 
$coche1 = new coche("ford",2020,"negro","camioneta","4puertas",1.6,0,"false","false");
$coche2 = new coche("chevrolet",2021,"negro","camioneta","4puertas",1.6,0,"false","false");
$coche3 = new coche("logan",2022,"negro","camioneta","4puertas",1.6,0,"false","false");
$coche4 = new coche("volhswagen",2023,"negro","camioneta","4puertas",1.6,0,"false","false");
$coche5 = new coche("toyota",2024,"rojo","camioneta","4puertas",1.6,0,"false","false");

// con echo retornamos a la pagina lo que queremos mostrar con el objeto 
echo $coche1->encender();
echo "<br>";
echo $coche2->marchar();
echo"<br>";
echo $coche3->colores();
echo "<br>";
echo $coche3->kilometros();
echo "<br>";
echo $coche5->colores();

?>