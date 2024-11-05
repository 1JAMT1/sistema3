<?php
    require 'includes/config/database.php';
    $db=conectarDB();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .cabecera {
            background-color: #7cb46c;
            padding: 6px;
            padding-left: 10px;
            position: relative;
            color: #ebe8e8;
            display: flex;
            width: 100%;
            align-items: center;
        }
        .cabecera p{
            margin: 14px;
        }
        a{
           
            border-radius: 5px;
            padding: 7px 20px;
            margin-bottom: 7px;
            margin-right: 20px;
            transition: all 0.3s linear;
            height: 40px;
            margin-left: auto;
        }
        .btn{
            font-size: 15px; 
            color: #575757;
        }
        .btn:hover{
            transform: translateY(-2px);
        }
        @media (max-width: 600px) {
        .contenido {
            flex-direction: column;

        }
        }
        .contenido{
            padding: 30px;
            display: flex;
        }
        .izq{
            background-color: rgb(255, 255, 255);
            margin-right: 30px;
        }
        .mapti{
            margin-top:10px;
        }
        .der{
            background-color: #ffffff;
            min-width: 300px;
        }
        h2{
            font-size: 20px;
        }
        .der img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <header class="cabecera">
         <p style="color: white;"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12.356 3.066a1 1 0 0 0-.712 0l-7 2.666A1 1 0 0 0 4 6.68a17.695 17.695 0 0 0 2.022 7.98 17.405 17.405 0 0 0 5.403 6.158 1 1 0 0 0 1.15 0 17.406 17.406 0 0 0 5.402-6.157A17.694 17.694 0 0 0 20 6.68a1 1 0 0 0-.644-.949l-7-2.666Z"/>
          </svg>
            Consulta de información</p>
         <a href="inicio.php">
            <button type="button" class="btn btn-light">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                  </svg> Volver atras</button>
         </a>
    </header>
    <div class="contenido">
        <div class="izq">
            <h2 >Filtros de búsqueda</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Identificacion de la persona</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="CI o nombre completo">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Estado</label>
                <select class="form-select" aria-label="Large select example">
                    <option selected>Estado</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Rango de fechas</label>
                <input style="margin-bottom: 4px;" type="date" class="form-control" id="exampleFormControlInput1">
                <input type="date" class="form-control" id="exampleFormControlInput1">
            </div>
            <button type="button" class="btn btn-primary" style="color: white; width: 100%;">Buscar</button> 
        </div>
        <div class="der">
            <h2 class="mapti">Mapa de geolocalización</h2>
            <img class="img-fluid" src="https://th.bing.com/th/id/R.ce78297a44c3bfa83bd96a88961a175a?rik=qFemgaeSL41XUw&pid=ImgRaw&r=0" alt="">
            <h2 style="margin-top: 20px;">Resultados</h2>
            <div style="overflow-x: auto; margin-top: 20px;">
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th scope="col">Número de caso</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha de emisión</th>
                <th scope="col">Ubicación</th>
                <th scope="col">Detalles</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $con_sql = 'SELECT 
                                m.fecha_emision AS "Fecha_emision",
                                m.estado_actual AS "Estado",
                                m.id_mandamiento AS "Id",
                                i.id_imputado AS "Caso",
                                d.descripcion AS "Descripcion",
                                g.latitud AS "Latitud",
                                g.longitud AS "Longitud"
                            FROM 
                                mandamiento m
                            JOIN 
                                geolocalizacion g ON g.id_mandamiento = m.id_mandamiento
                            JOIN 
                                imputado i ON m.id_imputado = i.id_imputado
                            JOIN 
                                historial_delictivo h ON i.id_imputado = h.id_imputado
                            JOIN
                                delito d ON h.id_delito = d.id_delito
                            ORDER BY 
                                m.prioridad ASC;';
                $resultado = mysqli_query($db, $con_sql);
                while ($reg = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <th scope="row"><?php echo $reg['Id']; ?></th>
                <td><?php echo $reg['Estado']; ?></td>
                <?php
                    $fecha_emision = $reg['Fecha_emision'];
                    setlocale(LC_TIME, 'es_ES.UTF-8', 'spanish');
                    $timestamp = strtotime($fecha_emision);
                    $fecha_formateada = strftime('%e de %B de %Y', $timestamp);
                ?>
                <td><?php echo $fecha_formateada; ?></td>
                <td><?php echo $reg['Longitud'] . ', ' . $reg['Latitud']; ?></td>
                <td><?php echo $reg['Descripcion']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

        
        </div>          
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
