<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container mt-5">
        <div class="form-container">
            <h2 class="text-center mb-4">Bienvenido al juego de Serpientes y Escaleras, ingrese el nombre de los jugadores</h2>
            <form action="tablero.php" method="POST">
                <div class="mb-3">
                    <label for="nombre1" class="form-label">Nombre del jugador 1</label>
                    <input type="text" class="form-control" id="nombre1" name="nombre1" required>
                </div>
                <div class="mb-3">
                    <label for="nombre2" class="form-label">Nombre del jugador 2</label>
                    <input type="text" class="form-control" id="nombre2" name="nombre2" required>
                </div>
                <button type="submit" class="btn btn-submit btn-block">Comenzar el juego</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>