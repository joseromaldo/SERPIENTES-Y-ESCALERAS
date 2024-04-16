<?php
$mov = "<img  src='./images/ficha2.webp' alt='ficha' id='ficha2'>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .row {
        justify-content: center;
        align-items: center;
    }

    #celda {
        height: 70px;
        width: 70px;
    }

    #celda2 {
        height: 70px;
        width: 70px;
    }

    #row2 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #ficha1 {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        margin-left: 21cm;
        margin-top: -2cm;
    }

    #ficha2 {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);

    }

    #salida {
        width: 80px;
        height: 80px;
        display: flex;
        margin-left: 18cm;
        margin-top: -2cm;
    }

    #escalera1 {
        width: 10cm;
        height: 10cm;
        display: flex;
        margin-left: 25cm;
        margin-top: -12cm;

    }

    #escalera2 {
        width: 5cm;
        height: 5cm;
        display: flex;
        margin-left: 30cm;
        margin-top: -15cm;
    }

    #escalera3 {
        width: 4cm;
        height: 3cm;
        display: flex;
        margin-left: 35cm;
        margin-top: 0cm;
    }

    #serpiente1 {
        width: 4cm;
        height: 3cm;
        display: flex;
        margin-left: 34cm;
        margin-top: 3cm;
    }

    #serpiente2 {
        width: 4cm;
        height: 3cm;
        display: flex;
        margin-left: 25cm;
        margin-top: -12cm;
        transform: rotate(30deg);
    }

    #serpiente3 {
        width: 4cm;
        height: cm;
        display: flex;
        margin-left: 25cm;
        margin-top: 3cm;
        transform: rotate(180deg);
    }
</style>

<body>

    <div class="row">
        <div class="col-12 border border-3 border-dark text-center">
            <h1>!Bienvenido al juego de escaleras y serpientes, jugadores!</h1>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-5 border border-3 border-dark text-center">

                <?php
                
                $numeroDado = '';
                $movimientosAcumulados = 0;

                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['tirar'])) {
                        
                        $numeroDado = rand(1, 12);

                        
                        $movimientosAcumulados = isset($_POST['movimientosAcumulados']) ? $_POST['movimientosAcumulados'] : 0;

                        
                        $movimientosAcumulados += $numeroDado;
                    } elseif (isset($_POST['reiniciar'])) {
                        
                        $numeroDado = 0;
                        $movimientosAcumulados = 0;
                    }
                }
                
                ?>

                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form class="mb-3 shadow p-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <div class="mb-3">
                                    <label for="numeroDado" class="form-label">Número del dado</label>
                                    <input type="number" class="form-control" id="numeroDado" name="numeroDado" value="<?php echo $numeroDado; ?>" required readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="movimientosAcumulados" class="form-label">Movimientos acumulados</label>
                                    <input type="hydden" class="form-control" id="movimientosAcumulados" name="movimientosAcumulados" value="<?php echo $movimientosAcumulados; ?>" required readonly>
                                </div>
                                <button type="submit" class="btn btn-success" name="tirar">Tirar</button>
                                <button type="submit" class="btn btn-danger" name="reiniciar">Reiniciar juego</button>
                            </form>
                            <br><br><br>
                            <?php
                           
                            switch ($movimientosAcumulados) {
                                case 0:
                                    echo "<h1>Bienvenido, presiona TIRAR para iniciar</h1>";
                                    break;
                                case 17:
                                    $movimientosAcumulados = 64;
                                    echo "<h1>¡LUJO! Sube hasta la casilla 64</h1>";
                                    
                                    break;
                                case 28:
                                    $movimientosAcumulados = 14;
                                    echo "<h1>¡Ups! Baja a la casilla 14</h1>";
                                    
                                    break;
                                case 43:
                                    $movimientosAcumulados = 2;
                                    echo "<h1>¡Ups! Baja a la casilla 2</h1>";
                                    
                                    break;
                                case 54:
                                    $movimientosAcumulados = 68;
                                    echo "<h1>¡LUJO! Sube hasta la casilla 68</h1>";
                                   
                                    break;
                                case 75:
                                    $movimientosAcumulados = 85;
                                    echo "<h1>¡LUJO! Sube hasta la casilla 85</h1>";
                                    
                                    break;
                                case 79:
                                    $movimientosAcumulados = 63;
                                    echo "<h1>¡Ups! Baja a la casilla 63</h1>";
                                  
                                    break;
                                case 100:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 101:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 102:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 103:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 104:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 105:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 106:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 107:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 108:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 109:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 110:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 111:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                case 112:
                                    echo "<h1>¡Felicidades! Ganaste, reinicia el juego.</h1>";
                                    break;
                                default:
                                    echo "<h1>Avanzaste $numeroDado posiciones</h1>";
                            }
                            ?>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <?php
                $color = array(
                    '1' => 'bg-warning',
                    '2' => 'bg-white',
                    '3' => 'bg-danger',
                    '4' => 'bg-info',
                    '5' => 'bg-success',
                    '6' => 'bg-warning',
                    '7' => 'bg-white',
                    '8' => 'bg-danger',
                    '9' => 'bg-info',
                    '10' => 'bg-success'
                );
                $color2 = array(
                    '1' => 'bg-success',
                    '2' => 'bg-warning',
                    '3' => 'bg-info',
                    '4' => 'bg-danger',
                    '5' => 'bg-white',
                    '6' => 'bg-success',
                    '7' => 'bg-warning',
                    '8' => 'bg-info',
                    '9' => 'bg-danger',
                    '10' => 'bg-white'
                );
                $key = 100;
                $key2 = 100;
                for ($i = 1; $i <= 10; $i++) {
                    echo "<div class='row'>";
                    if (($i % 2) == 0) { // Fila par
                        $key2 = $key2 - 19;
                        for ($j = 1; $j <= 10; $j++) {
                            if ($movimientosAcumulados == $key2) {
                                echo "<div id='celda2' class='col-1 $color[$j] border border-1 border-black'>" . $key2++ . $mov . "</div>";
                            } else {
                                echo "<div id='celda2' class='col-1 $color[$j] border border-1 border-black'>" . $key2++ . "</div>";
                            }
                        }
                        $key2 = $key2 - 11;
                    } else { // Fila impar

                        for ($j = 1; $j <= 10; $j++) {
                            if ($movimientosAcumulados == $key) {
                                echo "<div id='celda' class='col-1 $color2[$j]  border border-1 border-black'>" . $key-- . $mov . "</div>";
                            } else {
                                echo "<div id='celda' class='col-1 $color2[$j]  border border-1 border-black'>" . $key-- . "</div>";
                            }
                        }
                        $key = $key - 10;
                    }
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    if ($numeroDado != 0) {
        echo " ";
    } else {
        echo "<img  src='./images/ficha1.webp' alt='ficha' id='ficha1'>";
        echo "<img src='./images/salida.jpg' alt='salida' id='salida'>";
    }
    ?>
    <img src="./images/escalera1.png" alt="escalera1" id="escalera1">
    <img src="./images/escalera2.png" alt="escalera2" id="escalera2">
    <img src="./images/escalera3.png" alt="escalera3" id="escalera3">
    <img src="./images/serpiente1.png" alt="serpiente1" id="serpiente1">
    <img src="./images/serpiente2.png" alt="serpiente2" id="serpiente2">
    <img src="./images/serpiente3.png" alt="serpiente3" id="serpiente3">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>