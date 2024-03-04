<!DOCTYPE html>
<html>
<head>
    <title>Hechos de Gatos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
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
</head>
<body>
    <?php
    /**
     * Obtiene los datos de la URL proporcionada y los decodifica en formato JSON.
     * 
     * @param string $url La URL del servicio web.
     * @return object Los datos decodificados en formato JSON.
     */
    function obtenerDatos($url) {
        // Utilizamos file_get_contents para obtener los datos
        $data = file_get_contents($url);

        // Decodificamos los datos en formato JSON
        $catFacts = json_decode($data);

        return $catFacts;
    }

    /**
     * Crea una tabla HTML para mostrar los datos.
     * 
     * @param object $catFacts Los datos de los hechos de los gatos.
     * @return void
     */
    function crearTabla($catFacts) {
        // Creamos una tabla para mostrar los datos
        echo "<table>";
        echo "<tr><th>Hecho</th></tr>";
        foreach ($catFacts->data as $fact) {
            echo "<tr>";
            echo "<td>" . $fact->fact . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    // URL del servicio web
    $url = "https://catfact.ninja/facts?limit=20";

    // Obtenemos los datos
    $catFacts = obtenerDatos($url);

    // Creamos la tabla
    crearTabla($catFacts);
    ?>
</body>
<footer>Emilio González Torres</footer>
</html>
