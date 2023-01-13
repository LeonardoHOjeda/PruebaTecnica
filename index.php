<?php
  require("numbers.php");

  //Leemos el archivo
  $archivo = file('user-story-one.txt');

  $digito = [];
  $iteraDigito = 0;
  $pivote = 0;
  $recorreSerie = 0;
  $numeroCuenta = "";

  //Recorremos el archivo para leer los numeros de serie
  do {
    for ($filas=0; $filas < 3; $filas++) { 
      //Convertimos la fila en un arreglo de caracteres
      for ($columnas=$pivote; $columnas < $pivote+3; $columnas++) {
        $linea = str_split($archivo[$filas]);
        // Si el caracter existe, lo arreglamos al arreglo de digitos
        if (isset($linea[$columnas])) {
          $digito[$iteraDigito] .= $linea[$columnas];
        }
      }
    }

    $pivote = $pivote+3;
    $iteraDigito++;

    $recorreSerie++;
  } while ($recorreSerie < 9);

  // Comparamos los digitos con los numeros
  for ($iteracionDigitos=0; $iteracionDigitos < count($digito); $iteracionDigitos++) { 
    switch ($digito[$iteracionDigitos]) {
      case $zero:
        $numeroCuenta .= "0";
        break;
      case $one:
        $numeroCuenta .= "1";
        break;
      case $two:
        $numeroCuenta .= "2";
        break;
      case $three:
        $numeroCuenta .= "3";
        break;
      case $four:
        $numeroCuenta .= "4";
        break;
      case $five:
        $numeroCuenta .= "5";
        break;
      case $six:
        $numeroCuenta .= "6";
        break;
      case $seven:
        $numeroCuenta .= "7";
        break;
      case $eight:
        $numeroCuenta .= "8";
        break;
      case $nine:
        $numeroCuenta .= "9";
        break;
      default:
        $numeroCuenta .= "?";
        break;
    }
  }

  // Calculamos la suma de verificacion
  $pivoteDn = 8;
  $checksum = 0;
  for ($iteracionNumeroCuenta=0; $iteracionNumeroCuenta < 9; $iteracionNumeroCuenta++) {
    $dn = $numeroCuenta[$pivoteDn];
    $pivoteDn--;
    $checksum += ($iteracionNumeroCuenta+1) * (intval($dn));
  }

  // Verificamos el resultado
  if(strpos($numeroCuenta, "?")){
    echo "$numeroCuenta ";
    echo "ILL";
  } else if($checksum % 11 === 0 ){
    echo "$numeroCuenta ";
    echo "OK";
  } else {
    echo "$numeroCuenta ";
    echo "ERR";
  }


?>