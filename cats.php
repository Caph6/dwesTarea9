<!DOCTYPE html>
<html>
<head>
    <title>DWES Tarea 9</title>
    <style>
        /* Estilos para el cuerpo de la página, el título, el botón y la tabla */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        h1 {
            margin-bottom: 50px;
        }
        button {
            padding: 10px 20px;
            font-size: 20px;
            cursor: pointer;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
    <!-- Incluimos la biblioteca jQuery para poder usar AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
    <h1>DWES Tarea 9</h1>
   
    <button id="verDatos">Ver datos</button>
    
    <button id="volver" style="display: none;">Volver</button>
    <!-- Div donde se insertará la tabla de datos -->
    <div id="tablaDatos"></div>
    <script>
    // Cuando el documento esté listo...
    $(document).ready(function(){
        // Cuando se haga clic en el botón "Ver datos"...
        $("#verDatos").click(function(){
            // Realizamos una solicitud AJAX al archivo 'datos.php'
            $.ajax({
                url: 'datos.php',
                type: 'get',
                success: function(response){
                    // Insertamos la respuesta (la tabla de datos) en el div "tablaDatos"
                    $("#tablaDatos").html(response);
                    // Ocultamos el botón "Ver datos" y mostramos el botón "Volver"
                    $("#verDatos").hide();
                    $("#volver").show();
                }
            });
        });
        // Cuando se haga clic en el botón "Volver"...
        $("#volver").click(function(){
            // Vaciamos el div "tablaDatos"
            $("#tablaDatos").empty();
            // Mostramos el botón "Ver datos" y ocultamos el botón "Volver"
            $("#verDatos").show();
            $("#volver").hide();
        });
    });
    </script>
</body>

<footer>Emilio González Torres</footer>
</html>
