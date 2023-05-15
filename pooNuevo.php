<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// FINAL - 
// ABSTRACT -
// STATIC -

abstract class capacitacion{
    protected $cursos;
    public $capacidad;
    private $color;
    public static $uniforme = "pixelado";

    public function __construct($cursos, $capacidad, $color){
        $this->cursos = $cursos;
        $this->capacidad = $capacidad;
        $this->color = $color;
    }

    final public static function getUniforme(){
        echo "El uniforme a utilizar es " . self::$unifome;
    }

    public function getInfo() : void{
        echo "La capacitacion tiene $this->cursos cursos, y tiene capacidad de: $this->capacidad Estudiantes";
    }

    public function getColor() : void{
        echo "El uniforme tiene que ser de color $this->color";
    }

    public function getCursos(): void{
        echo "La capacitacion tiene  $this->cursos";
    }
}

class informatica extends capacitacion{
    public $periodos;

    public function __construct($periodos = 0, $cursos = 0, $capacidad = 0, $color = 0)
    {
        $this->periodos = $periodos;
        parent::__construct($cursos, $capacidad, $color);
    }

    public function getInfo() : void{
        echo "La capacitacion de informatica tiene $this->cursos cursos, capacidad de: $this->capacidad 
        Estudiantes , $this->periodos periodos, y el uniforme a utilizar  es: " . parent::$uniforme ;
    }
}

class programacion extends capacitacion{
    public function getInfo() : void{
        echo "La capacitacion de Programacion tiene $this->cursos cursos, 
        capacidad de: $this->capacidad Estudiantes";
    }
}

#$capacitacion = new Capacitacion(1, 2);

$informaticaprimermodulo = new informatica(100,4,20,"verde");
$informaticaprimermodulo->getInfo();
echo "<br>";
$informaticaprimermodulo->getColor();
echo "<br>";
echo "<hr>";
$programacionprimermodulo = new programacion(5,15,"verde");
$programacionprimermodulo->getInfo();
echo "<br>";
$informaticaprimermodulo->getColor();