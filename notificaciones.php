
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
            .conten {
                flex-direction: column;
                margin-left: 10px;
                margin-right: 10px;
            }
        }
        .btn{
            font-size: 15px;
        }
        .conten{
            margin-left: 18%;
            margin-right: 30px;
            display: flex;
            justify-content: center;
        }
        .izqu,.dere{
            background-color:#f3f3f3;
            margin-top: 10px;
            margin-left: 8px;
            margin-right: 8px;
            margin-bottom:10px;
            width: fit-content;
            height:100%;
            border-radius:5px;
            padding: 10px;
            padding-left: 40px;
            padding-right: 40px;
            font-size: 15px;
            
        }
        .list-group-item1{
            background-color:#f3f3f3;
            height: 90px;
            width: 100%;
            border: none;
            border-bottom: solid  1px#d8d8d8;
            list-style: none;
        }
        #modal::backdrop{
          background-color:rgba(0,0,0,.55);
        }
        #modal {
    width: 80%; 
    max-width: 800px; 
    height: 90vh; 
    border: none; 
    padding: 0;
    position: fixed; 
    top: 50%; 
    left: 50%; 
    transform: translate(-50%, -50%); 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    border-radius: 8px; 
}

    #btn_cerrar {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #ffc107; 
        color: #fff;
        border: none;
        padding: 10px;
        cursor: pointer;
        border-radius: 5px;
        font-weight: bold;
    }

    #btn_cerrar:hover {
        background-color: #e0a800; /* Color al pasar el ratón */
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
                <div class="notif">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                    </svg>                  
                    <span><a href="notificaciones.php" style="text-decoration: none; color: black;">Notificaciones</a></span>
                </div>
                <div>
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
                    </span>
                </div>
            </div>
    </aside>
            <div class="conten">
                <div class="izqu">
                    <select style="font-size:18px;border: none; width: 100%; background-color:#f3f3f3; margin-bottom: 10px;">
                        <option selected ><p>Mostrar actualizaciones</p></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                  </select>
                  <ul class="list-group" style="height: 100%;">
                        <li class="list-group-item1">
                        <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                        <label style="margin-left: 20px;" class="form-check-label" for="firstCheckbox"><h3>Detalles de la orden judicial</h3><p>Nueva entrada de orden creada</p></label>
                        </li>
                        <li class="list-group-item1">
                        <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                        <label style="margin-left: 20px;" class="form-check-label" for="secondCheckbox"><h3>Detalles de la orden judicial</h3><p>Entrada marcada como resuelta</p></label>
                        </li>
                        <li class="list-group-item1">
                        <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                        <label style="margin-left: 20px;" class="form-check-label" for="thirdCheckbox"><h3>aprehesion</h3><p>Entrada marcada como resuelta</p></label>
                        </li>
                        <li class="list-group-item1">
                        <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                        <label style="margin-left: 20px;" class="form-check-label" for="thirdCheckbox"><h3>Reportes</h3><p>Nuevo reporte creado</p></label>
                        </li>
                        <li class="list-group-item1">
                        <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                        <label style="margin-left: 20px;" class="form-check-label" for="thirdCheckbox"><h3>Actualizacion de caso</h3><p>Nueva actualizacion de caso</p></label>
                        </li>
                  </ul>
                </div>
                <div class="dere">
                    <h2>Detalles de la orden judicial <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z" clip-rule="evenodd"/>
                        </svg>
                    </h2>
                    <table class="table">
                        <tbody class="deta">
                            <tr >
                                <td style="padding: 7px; background-color: #f3f3f3; border: none;"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd"/></svg>
                                Oficial asignado
                                </td>
                                <td style="padding: 7px; background-color: #f3f3f3;" border: none;><p style="background-color: #ffffff; border: solid 1px black; padding: 3px; border-radius: 5px;">Walter Duran Zambrana</p></td>
                            </tr>

                            <tr>
                                <td  style="background-color: #f3f3f3; border: none;"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/></svg>
                                Due date
                                </td>
                                <td  style="padding: 7px; background-color: #f3f3f3; border: none;"><p style="background-color: #568ca2; color: white; padding: 3px; border-radius: 5px;">Hoy</p></td>
                            </tr>

                            <tr>
                                <td style="padding: 7px; background-color: #f3f3f3; border: none;"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z"/></svg>
                                Cases
                                </td>
                                <td style="padding: 7px; background-color: #f3f3f3;"><p style="background-color: #ffffff; border: solid 1px black; padding: 3px; border-radius: 5px;">Caso confidencial</p></td>
                            </tr>
                            
                            <tr>
                                <td style="background-color: #f3f3f3; border: none;"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><circle cx="12" cy="19" r="2"/><rect x="11" y="3" width="2" height="12" /></svg>
                                Urgency
                                </td>
                                <td style="padding: 7px; background-color: #f3f3f3; border: none;"><p  style="background-color: #568ca2; color: white; padding: 3px; border-radius: 5px;">alto</p></td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>Archivos ajuntos</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8v8a5 5 0 1 0 10 0V6.5a3.5 3.5 0 1 0-7 0V15a2 2 0 0 0 4 0V8"/></svg>
                                No hay archivos adjuntos
                                </td>
                                <td><button style="background-color: #ffffff; border-radius: 5px; padding: 5px; border: solid 1px #979797">Adjuntar</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>Enlaces relacionados</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/></svg>
                                No hay documentos
                                </td>
                                <td><button style="background-color: #ffffff; border-radius: 5px; padding: 5px; border: solid 1px #979797" >Agregar</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <button style="background-color: #ffffff; border-radius: 5px; padding: 5px; margin-right: 20px; border: solid 1px #979797">Actualizar</button>
                    <button style="background-color: #568ca2; border-radius: 5px; padding: 5px; border: none;margin-right: 20px;color: #ffffff; ">Eliminar entrada</button>
                    <button id="btn_abrir" style="background-color: #38DB96; border-radius: 5px; padding: 5px; border: none;margin-right: 20px;color: #ffffff; ">Delito</button>
                      <dialog id=modal>
                          <iframe src="doc/doc1.pdf" width="100%" height="900px"></iframe>
                          <button type="button" class="btn btn-warning" id="btn_cerrar">Cerrar</button>
                      </dialog>
                </div>
            </div>
    </div>
    </div>
    <script>
        //inicio  modal
        const btnAbrilModal=
      document.querySelector("#btn_abrir");
      const btnCerrar=
      document.querySelector("#btn_cerrar");
      const modal=
      document.querySelector("#modal");

      btnAbrilModal.addEventListener("click",()=>{
        modal.showModal();
      });

      btnCerrar.addEventListener("click",()=>{
        modal.close();
      });
        //fin modal
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