<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylem.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @media (max-width: 900px) {
            nav {
                border-radius: 5px;
                background-color: #fff;
                color: #7cb46c;
            }
        }
        .btn{
            font-size: 15px;
        }
        .conten{
            margin-left: 19%;
            margin-right: 30px;
        }
        .alerta{
            width: 100%;
            font-size: 16px;
        }
        .alert{
            background-color: #fc9404;
            color: white;
            width: 100%;
        }
        .mostrar{
            width: 50%;
        }
        .mostrar select{
            width: 100%;
            font-size: 20px;
            border: none;
        }
        .mostrar input{
            font-size: 15px;
            border-color: rgb(216, 216, 216);
            border-radius: 4px;
            width: 100%;
            margin-top: 10px;
            border-style: double;
        }

        .cuadro{
            display: flex;
            justify-content: space-between;
            gap: 20px; 
        }
        .container {
            margin-top: 30px;
            width: 400px;
            background-color: #e2e2e2;
            padding: 20px;
            font-size: 15px;
            border-radius: 5px;
        }
        @media (max-width: 768px) {
            .cuadro {
                flex-direction: column;
            }

            .container {
                width: 100%;
                margin-bottom: 10px;
            }
        }
                .header {
            display: flex;
            align-items: center;
        }
        .header img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .header h2 {
            margin: 0;
            font-size: 18px;
        }
        .content {
            margin: 20px 0;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
        }
        .button {
            padding: 10px;
            background-color: #4e7cb1;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            width: 100px;
        }
        .button.notify {
            background-color: white;
            color: #000;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="cabecera">
        <nav>
            <span id="open-close">☰  Menu</span>
        </nav>
        <section class="search">
            <div class="buscador">
                <input type="text" placeholder="     Busqueda rápida de casos">
                <button type="button" class="btn btn-light">    Buscar    </button>
                  <svg id="lupa" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                  </svg>                               
            </div>
        </section>
    </div>
    <div>
        <aside id="aside">
            <div class="container-svg">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#030303" width="20px" height="20px" aria-hidden="true" focusable="false"><path d="M10.5 2a8.5 8.5 0 0 0 0 17c1.67 0 3.23-.48 4.56-1.36l5.67 5.67a1 1 0 0 0 1.41-1.41l-5.67-5.67A8.5 8.5 0 0 0 10.5 2zm0 15A6.5 6.5 0 1 1 17 10.5 6.51 6.51 0 0 1 10.5 17z"/></svg>
                    <span ><a href="inicio.php" style="text-decoration: none; color: black;">Inicio</a></span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#030303" width="25px" height="25px" aria-hidden="true" focusable="false"><path d="M12 2C8.13 2 5 5.13 5 9c0 3.06 5 11 7 13 2-2 7-9.94 7-13 0-3.87-3.13-7-7-7zm0 10.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 7.5 12 7.5s2.5 1.12 2.5 2.5S13.38 12.5 12 12.5z"/></svg>
                    <span><a href="consulta.php" style="text-decoration: none; color: black;">Geolocalizar casos</a></span>
                </div>
                <div>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                    </svg>                  
                    <span><a href="notificaciones.php" style="text-decoration: none; color: black;">Notificaciones</a></span>
                </div>
                <div class="apren">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z"/>
                    </svg>                  
                    <span><a href="aprehesiones.php" style="text-decoration: none; color: black;">Aprehensiones</a></span>
                </div>
            </div>
            
            <div class="container-svg last-item" >
                <div>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M9.586 2.586A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2v.089l.473.196.063-.063a2.002 2.002 0 0 1 2.828 0l1.414 1.414a2 2 0 0 1 0 2.827l-.063.064.196.473H20a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-.089l-.196.473.063.063a2.002 2.002 0 0 1 0 2.828l-1.414 1.414a2 2 0 0 1-2.828 0l-.063-.063-.473.196V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.089l-.473-.196-.063.063a2.002 2.002 0 0 1-2.828 0l-1.414-1.414a2 2 0 0 1 0-2.827l.063-.064L4.089 15H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h.09l.195-.473-.063-.063a2 2 0 0 1 0-2.828l1.414-1.414a2 2 0 0 1 2.827 0l.064.063L9 4.089V4a2 2 0 0 1 .586-1.414ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z" clip-rule="evenodd"/>
                      </svg>                      
                    <span>Configuracion</span>
                </div>
                <div>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                      </svg>                      
                      <span><a href="index.php" style="color: inherit; text-decoration: none;">Cerrar Sesion</a>
                      </div>
            </div>
        </aside>
        <div class="conten">
            <div class="alerta">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.356 3.066a1 1 0 0 0-.712 0l-7 2.666A1 1 0 0 0 4 6.68a17.695 17.695 0 0 0 2.022 7.98 17.405 17.405 0 0 0 5.403 6.158 1 1 0 0 0 1.15 0 17.406 17.406 0 0 0 5.402-6.157A17.694 17.694 0 0 0 20 6.68a1 1 0 0 0-.644-.949l-7-2.666Z"/>
                      </svg>
                      <strong>¡Actualización importante!</strong> <p>mántengase informado sobre las ultimas actualizaciones y mejoras de garantias para una experiencia perfecta. ¡Su seguridad es nuestra prioridad!</p> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            </div>
            <div class="mostrar">
                <select>
                    <option selected>Mostrar actualizaciones</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <input type="text"  placeholder=" Buscar" >
            </div>
            <div class="cuadro">
                <div class="container">
                    <div class="header">
                        <svg style="background-color: #4e7cb1; border-radius: 5px; color: white; padding: 8px;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                          </svg>                          
                        <h2>Alerta de aprehension</h2>
                    </div>
                    <p>Actualización de incidentes, 60 minutos</p>
                    <div class="content">
                        <p>Se ha generado una actualizacion que requiere su revisión.</p>
                    </div>
                    <div class="buttons">
                        <button class="button details">Detalles</button>
                        <button class="button notify">Notificar</button>
                    </div>
                </div>
                <div class="container">
                    <div class="header">
                        <svg style="background-color: #4e7cb1; border-radius: 5px; color: white; padding: 8px;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                          </svg>                          
                        <h2>Aprehensión actualizada</h2>
                    </div>
                    <p>Actualización de estado, 30 minutos.</p>
                    <div class="content">
                        <p>Informe mensual</p>
                    </div>
                    <div class="buttons">
                        <button class="button details">Detalles</button>
                        <button class="button notify">Notificar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        const $openClose = document.getElementById("open-close");
        const $aside = document.getElementById("aside");

        $openClose.addEventListener("click", () => {
            if ($aside.style.display === "none" || $aside.style.display === "") {
                $aside.style.display = "block";
                if (window.innerWidth < 900) {
                    $aside.classList.add("visible"); 
                }
            } else {
                $aside.style.display = "none";
                $aside.classList.remove("visible");
            }
        });

        window.addEventListener("resize", () => {
            if (window.innerWidth <= 900) {
                $aside.style.display = "none"; 
                $aside.classList.remove("visible"); 
            } else {
                $aside.style.display = "block";
                $aside.classList.add("visible"); 
            }
        });


        if (window.innerWidth > 900) {
            $aside.style.display = "block"; 
            $aside.classList.add("visible"); 
        } else {
            $aside.style.display = "none"; 
            $aside.classList.remove("visible");
        }

    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>