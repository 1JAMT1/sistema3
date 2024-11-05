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
        .contenido{
            padding: 30px;
        }
        .card{
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <header class="cabecera">
         <p><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z"/>
          </svg>  Formulario de registro</p>
         <a href="inicio.html">
            <button type="button" class="btn btn-light">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                  </svg> Volver atras</button>
         </a>
    </header>
    <div class="contenido">
        <h2>Actualizar historia delictivo</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre completo</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Roberto Perales Medina">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tipo de delito</label>
            <select class="form-select" aria-label="Large select example">
                <option selected>Seleccione</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripcion del caso</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-primary" style="color: white;">Enviar</button>
    
        <h2 style="margin-top: 40px;">Actualizar caso</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre completo</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Roberto Perales Medina">
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Large select example">
                <option selected>Seleccione</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-primary" style="color: white;">Enviar</button>
    
        
        <h2 style="margin-top: 40px;">Datos adjuntos al caso</h2>
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">
              <span>Datos judiciales</span>
              <button type="button" class="btn btn-primary" style="color: white;">Editar</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">
              <span>Datos de la persona</span>
              <button type="button" class="btn btn-primary" style="color: white;">Editar</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">
              <span>Historial delictivo</span>
              <button type="button" class="btn btn-primary" style="color: white;">Editar</button>
            </div>
        </div>          
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
