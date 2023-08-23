<?php

phpinfo();

//si una variable tiene un numero alante no es valida ($3marcos) 
//es valida de la siguiente forma ($_3marcos, $marcos, $_marcos)

//$id = 3445;

//$promedio = "3.8";

//$nombre = "maria";

//$mayor_de_edad = true;
//$mayor_de_edad = false;

//echo "ID: ".$id."\n";
//echo "ID: $id";
//echo "ID: $id","promedio: $promedio";

//print "ID: $id\n";

//echo "ID: $id\npromedio : $promedio\nNombre: $nombre";
//echo "mayor_de_edad: $mayor_de_edad\n";
//echo "mayor_de_edad: $mayor_de_edad";

//funciones


/*$x = 5; //variable global

function variable(){ //la X no se lee porque esta definida como global y la funcion solo detecta las variables que estan dentro de esta.
    $y = 10; //variable local

   echo "la variable X es: $x";
    echo "<\n>";
    echo "la variable Y es: $y";
}

variable();
echo "<\n>";
echo "variable de la prueba fuera de la funcion";
echo "<\n>";
echo "la variable X es: $x";

echo "la variable Y es: $y"; */

/*
define("pi",pi());
echo "<p> el valor de pi es: ".pi."</p>\n";

define("Autor", "gabriel garcia marquez");
echo "<p>El autor es: ".Autor."</p>";

const PI = 3.1416;
echo PI;
*/



//simbolos matematicos

/*

$a = 18;

$b = 3;

$suma = $a + $b;

$resta = $a - $b;

$multiplicasion = $a * $b;

$divicion = $a/$b;

$modulo = $a%$b;


echo "la suma es: $suma";
echo "\n";
echo "la resta es: $resta";
echo "\n";
echo "la multiplicasion es: $multiplicasion";
echo "\n";
echo "la divicion es: $divicion";
echo "\n";
echo "el modulo es: $modulo"

*/


//Pedir el radio de un círculo y calcular
//su área. A=PI*r^2.
/*echo "\n";

$radio = readline("Ingrese el radio: ");
$area = pi()*pow($radio, 2);

echo "el area del circulo es: $area"; */



/* Realiza un programa que calcule el
perímetro y área de un rectángulo dada
su base y su altura.


$base = readline("ingrese la base: ");
$altura = readline("ingrese altura: ");
$area = $base * $altura;
$perimetro = $base*2 + $altura*2;

echo "el area es: $area";
echo "\n";
echo "el perimetro es: $perimetro";*/


/*3.Pida al usuario dos pares de números
(x1, y1) y (x2, y2), que representen dos
puntos en el plano. Calcula y muestra la
distancia entre ellos. */

/*$x1 = readline("ingrese x1: ");
$x2 = readline("ingrese x2: ");
$y1 = readline("ingrese y1: ");
$y2 = readline("ingrese y2: ");

$distancia = sqrt(pow($x1-$x2,2) + pow($y1-$y2,2));

echo"\n";
echo"la distancia es: $distancia";*/

/*$compra = readline("ingrese el valor de la compra: ");
$descuento = $compra * 25 / 100;
$totalpago = $compra - $descuento;
echo "\n";

echo "el total de la compra: $totalpago";*/



//clase del lunes 31/07/2023



//ejercisio 5




/*$inversion = readline("ingrese cuanto desea invertir: ");
$capital = $inversion *2 / 100;
$ganancia = $inversion + $capital;
$menos = $ganancia - $inversion;

echo "la ganancias seran: $menos";*/


//ejercisio 6


/*$sueldo = readline("ingrese su sueldo: ");
$extra = $sueldo *10/100;
$total = $sueldo - $extra;
$comisison = $total * 3;
$totalVC = $sueldo + $comisison;

echo "la comision por sus 3 ventas seran: $comisison";
echo "\n";
echo "sus ganancias al mes son: $totalVC";*/


//pedir un numero entre 0 y 9.999 y decir cuantas cifras tiene

/*$num = readline("ingrese un numero: ");

if ($num < 10){
    echo "el numero ingresado tiene una cifra ";
}elseif($num < 100){
    echo ("el numero ingresado tiene dos cifras");
}elseif($num < 1000){
    echo ("el numero ingresado tiene tres cifras");
}elseif($num < 10000){
    echo ("el numero ingresado tiene cuatro cifras");
}else{
    echo ("este numero esta fuera del rango");
}*/

//forma1 

/*$num1 = readline("ingrese el primer numero: ");
echo "\n";
$num2 = readline("ingrese el segundo numero: ");
echo "\n";

if($num1 == $num2){
    echo "los nuemros son iguales ";
}elseif($num1 < $num2){
    echo "el $num1 es mayor que el $num2 ";
}elseif($num1 > $num2){
    echo "el $num1 es mayor que el $num2 ";
}*/
 


//forma2

/*$num1 = readline("ingrese el primer numero: ");
echo "\n";
$num2 = readline("ingrese el segundo numero: ");
echo "\n";

if($num1 > $num2) {
    echo "mayor: ".$num1;
}elseif($num2 > $num1) {
    echo "mayor: ".$num2;
}else{
    echo"son iguales";
}*/


//ejercisio 3 (echo por mi)

/*$num1 = readline("ingrese el primer numero: ");
echo "\n";
$num2 = readline("ingrese el segundo numero: ");
echo "\n";
$num3 = readline("ingrese el tercer numero: ");
echo "\n";

if($num1 > $num2 and $num2 > $num3) {
    echo "$num1, $num2, $num3";

}elseif ($num2 > $num1 and $num1 > $num3){
    echo "$num2, $num1, $num3";
}elseif ($num3 > $num2 and $num2 > $num1){
    echo "$num3, $num2, $num1";
}elseif ($num1 > $num3 and $num3 > $num2){
    echo "$num1, $num2, $num3";
}elseif ($num1 > $num2 and $num2 > $num3){
    echo "$num1, $num2, $num3";
}elseif ($num3 > $num2 and $num1 > $num2){
    echo "$num3, $num1, $num2";
}elseif ($num2 > $num3 and $num3 > $num1){
    echo "$num2, $num3, $num1";
}*/

//echo por el profesor te da los numeros en oren creciente

/*$num1 = readline("ingrese el primer numero: ");
echo "\n";
$num2 = readline("ingrese el segundo numero: ");
echo "\n";
$num3 = readline("ingrese el tercer numero: ");


if ($num1 > $num2 && $num2 > $num3){
    echo "orden decreciente: $num1 $num2 $num3";
}elseif ($num1 > $num3 && $num3 > $num2){
    echo "orden decrecie:  $num1 $num3 $num2";
}elseif ($num2 > $num1 && $num1 > $num3){
    echo "orden decrecie:  $num2 $num1 $num3";
}elseif ($num2 > $num3 && $num3 > $num1){
    echo "orden decrecie:  $num2 $num3 $num1";
}elseif ($num3 > $num1 && $num1 > $num2){
    echo "orden decrecie:  $num3 $num1 $num2";
}elseif ($num3 > $num2 && $num2 > $num1){
    echo "orden decrecie:  $num3 $num3 $num1";
}*/

// ejercisio 4
// || = significa O
// && = significa Y

/*$lado1 = readline("ingrese el primer lao: ");
echo "\n";
$lado2 = readline("ingrese el segundo lao: ");
echo "\n";
$lado3 = readline("ingrese el tercer lao: ");
echo "\n";

if($lado1 == $lado2 && $lado2 == $lado3){
    echo "Equilartero";
}
elseif($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
    echo "isosceles";
}else{
    echo "escaleno";
}*/


//ejercisio 5

/*$recorrido = readline("ingrese el recorrido: ");

if($recorrido < 0 && $recorrido <= 300){
    $impuesto = 0;
    $monto = 3000000;

}elseif($recorrido > 300 && $recorrido <= 1000){
    $impuesto = ($recorrido - 300)* 15000;
    $monto = 3000000 + $impuesto;

}elseif($recorrido > 1000) {
    $impuesto = ($recorrido -1000)*10000;
    $monto = 3000000 + $impuesto;
}

echo "\n";
echo "monto a pagar: ". $monto;
echo "\n";
echo "\n";
echo "monto a pagar por alkiler: ". $impuesto;*/

$impredial = readline("ingresa el valor del impuesto predial: ");
echo "\n";
echo "ingresa el estrato de la vivienda "."\n";
echo "digite 1 para estrato 1"."\n";
     "digite 2 para estrato 2"."\n";
    "digite 3 para estrato 3"."\n";
     "digite 4 para estrato 4"."\n";
    "digite 5 para estrato 5"."\n";
     "digite 6 para estrato 6"."\n";

     $estrato = readline("digite estrato: ");

     switch ($estrato) {
        case 1:
        $inc = $impredial * 0.02;
        break;

        case 2:
            $inc = $impredial * 0.05;
            break;

            case 3:
                $inc = $impredial * 0.07;
                break;

                case 4:
                    $inc = $impredial * 0.10;
                    break;

                    case 5:
                        $inc = $impredial * 0.12;
                        break;

                        case 6:
                            $inc = $impredial * 0.15;
                            break;
     }

     echo "su estrato es: $inc"



?>




