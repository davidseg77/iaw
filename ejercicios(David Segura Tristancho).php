<?php
    echo "Práctica 3 (PHP) - David Segura Tristancho";
    echo "<p></p>";

    echo "Ejercicio 1"; 
    echo "<p></p>";
  phpinfo();
  echo "<p></p>";

  echo "Ejercicio 2"; 
    echo "<p></p>";
    $suma = 0; // variable para almacenar la suma acumulada
    for ($i = 1; $i <= 100; $i++) {
      if ($i % 2 != 0) { // verifica si el número es impar
        echo $i . "<br>"; // imprime el número impar
        $suma += $i; // agrega el número impar a la suma acumulada
      }
    }
    echo "La suma acumulada es: " . $suma; // imprime la suma acumulada
  echo "<p></p>";

  echo "Ejercicio 3"; 
  echo "<p></p>";
  $numero = 1;
$suma = 0;
while ($numero <= 50) {
  $cuadrado = $numero * $numero;
  echo "El cuadrado de " . $numero . " es " . $cuadrado . "<br>";
  $suma += $cuadrado;
  $numero++;
}
  echo "La suma total es: " . $suma;
  echo "<p></p>";

  echo "Ejercicio 4"; 
  echo "<p></p>";
  $suma = 0;
for ($i = 1; $i <= 100; $i++) {
  if ($i % 5 == 0) { // verifica si el número es múltiplo de 5
    echo $i . "<br>"; // imprime el número múltiplo de 5
    $suma += $i; // agrega el número múltiplo de 5 a la suma
  }
}
$cuadrado_suma = $suma * $suma; // calcula el cuadrado de la suma
echo "La suma de los múltiplos de 5 es: " . $suma . "<br>";
echo "El cuadrado de la suma es: " . $cuadrado_suma;
echo "<p></p>";

echo "Ejercicio 5"; 
echo "<p></p>";
$num = 3.14159; // el número a redondear
$redondeado = round($num * 1000) / 1000; // redondea a 3 cifras decimales
echo "El número redondeado es: " . $redondeado; // muestra el resultado
echo "<p></p>";

echo "Ejercicio 6"; 
echo "<p></p>";
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

sort($meses); // ordena el array alfabéticamente

foreach ($meses as $mes) {
  echo $mes . "<br>"; // muestra cada mes en una línea
}
echo "<p></p>";

echo "Ejercicio 7"; 
echo "<p></p>";
for ($i = 1; $i <= 100; $i++) {
    // generar colores aleatorios
    $red = mt_rand(0, 255);
    $green = mt_rand(0, 255);
    $blue = mt_rand(0, 255);
    // generar código CSS
    $css = "width: 50px; height: 50px; background-color: rgb($red, $green, $blue); float: left; margin: 5px;";
    // generar código HTML
    $html = "<div style='$css'></div>";
    // imprimir el cuadrado en pantalla
    echo $html . "<br>";
  }
  echo "<p></p>";
?>