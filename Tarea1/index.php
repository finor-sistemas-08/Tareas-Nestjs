<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Tabla de multiplicar</title>

</head>

<body>
      <?php
      include_once('multiplicacion.php');
      ?>
      <form name="frmTablasMultiplicar" method="POST">

            <h1>Tarea 1</h1>
            <input id="txtCalcular" name="txtCalcular" type="number" value="">

            <button id="btnCalcular" name="btnCalcular" type="submit" value="Calcular">Calcular</button>
            <!-- <input type="submit" name="btnCalcular" value="Calcular"> -->
            <br>

            <table>
                  <?php

                  //Si hay un valor en el txtCalcular entonces va a mostrar la tabla de tal valor numérico entero
                  if (isset($_POST['btnCalcular'])) {
                        if ($_POST['btnCalcular'] = "Calcular") {
                              if ($_POST["txtCalcular"] && $_POST["txtCalcular"] > 0) {
                                    $valor = ($_POST["txtCalcular"]);
                                    $tabla10en10 = tabla10en10($valor);
                                    $tabla = tabla($valor);
                                    echo "$tabla";
                                    echo "<br>";
                                    echo $tabla10en10;
                              } else {
                                    echo "Debe ingresar un valor entero";
                              }
                        }
                  }

                  ?>
                  <br>
                  <div id="array_numeros_ordenado">
                        <p>Ordenando números: [13,245,133,45,52,126, 29]</p>
                        <?php

                        $numbers = [13, 245, 133, 45, 52, 126, 29];

                        for ($i = 0; $i < count($numbers); $i++) {
                              for ($j = 0; $j < count($numbers); $j++) {
                                    if ($numbers[$i] > $numbers[$j]) {
                                          $aux = $numbers[$i];
                                          $numbers[$i] = $numbers[$j];
                                          $numbers[$j] = $aux;
                                    }
                              }
                        }
                        echo "<p>Resultado: </p>";

                        //Imprimir en pila
                        for ($i = 0; $i < count($numbers); $i++) {
                              echo "$numbers[$i] <br>";
                        }

                        //Imprimir como un array
                        // print_r($numbers);
                        ?>
                  </div>
                  <br>
                  <div id="array_palabras_ordenado">
                        <p>Ordenando palabras: ["pedro","juan","antonio","maria","zulema","nelson", "manuel"]</p>
                        <?php

                        $words = ["pedro", "juan", "antonio", "maria", "zulema", "nelson", "manuel"];

                        //Ordena el array alfabéticamente pero no modifica sus posiciones
                        // asort($words);

                        echo "<p>Resultado: </p>";

                        //Imprimir en pila
                        for ($i = 0; $i < count($words); $i++) {
                              for ($j = 0; $j < count($words); $j++) {
                                    
                                    //Obtener cambos primeros caracteres de las palabras
                                    $car1 = substr($words[$i], 0);
                                    $car2 = substr($words[$j], 0);
                                    
                                    //Obtener el valor ASCII de cada primer caracter
                                    $val1 = ord($car1);
                                    $val2 = ord($car2);

                                    if ($val1 < $val2) {
                                          $aux = $words[$i];
                                          $words[$i] = $words[$j];
                                          $words[$j] = $aux;
                                    }
                              } 
                        }

                         //Imprimir en pila
                         for ($i = 0; $i < count($words); $i++) {
                              echo "$words[$i] <br>";
                        }

                        //Imprimir como un array
                        // print_r($words);
                        ?>
                  </div>
            </table>
      </form>

</body>


</html>