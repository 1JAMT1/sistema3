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
    <link rel="stylesheet" href="stylem.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <style> 
        @import url(https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic);
        
        .table{
            width: 79%;
           
            margin-top: 30px;
            font-size: 15px;
        }
        .btn{
            font-size: 15px;
        }
        img{
            width: 30px;
            height: 30px;
            border-radius: 10px;
        }

        :root {
          --primary-color: #ccc;
          --text-color: #1d1d1d;
          --bg-color: #f1f1fb;
        }
        @media (max-width: 900px) {
            .containerc {
                flex-direction: column;
                align-items: center;
            }
            .containerc div {
                width: 90%;
            }
            nav {
                border-radius: 5px;
                background-color: #fff;
                color: #7cb46c;
            }
   
        }
        @media (min-width: 900px) {
            .table{
              margin-left:19%;
            }
        }
        .containerc {
          width: 100%;
          height: 100%;
          display: flex;
          justify-content: space-around;
          margin-top: 30px;
        }
        .calendar {
          margin-top: 10px;
          width: 300px;
          height: 290px;
          padding: 14px 20px;
          border-radius: 10px;
          background-color: var(--bg-color);
        }
        .calendar .header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          margin-bottom: 10px;
          padding-bottom: 20px;
          border-bottom: 2px solid #ccc;
        }
        .calendar .header .month {
          display: flex;
          align-items: center;
          font-size: 15px;
          font-weight: 600;
          color: var(--text-color);
        }
        .calendar .header .btns {
          display: flex;
          gap: 7px;
        }
        .calendar .header .btns .btn {
          width: 30px;
          height: 30px;
          display: flex;
          align-items: center;
          justify-content: center;
          border-radius: 5px;
          color: #fff;
          background-color: var(--primary-color);
          font-size: 16px;
          cursor: pointer;
          transition: all 0.3s;
        }
        .calendar .header .btns .btn:hover {
          background-color: #7cb46c;
          transform: scale(1.05);
        }
        .weekdays {
          display: flex;
          gap: 10px;
          margin-bottom: 10px;
        }
        .weekdays .day {
          width: calc(100% / 7 - 10px);
          text-align: center;
          font-size: 16px;
          font-weight: 600;
        }
        .days {
          display: flex;
          flex-wrap: wrap;
          gap: 10px;
        }
        .days .day {
          width: calc(100% / 7 - 10px);
          height: 23px;
          display: flex;
          align-items: center;
          justify-content: center;
          border-radius: 5px;
          font-size: 15px;
          font-weight: 400;
          color: var(--text-color);
          background-color: #fff;
          transition: all 0.3s;
        }
        .days .day:not(.next):not(.prev):hover {
          color: #fff;
          background-color: #7cb46c;
          transform: scale(1.05);
        }
        .days .day.today {
          color: #fff;
          background-color: var(--primary-color);
        }
        .days .day.next,
        .days .day.prev {
          color: #ccc;
        }
        .calen{
          display: flex;
          margin-left: 18%;
        }
        .alert-container {
            margin-top: 10px;
            max-width: 400px;
            background-color: #f1f1f1;
            border-radius: 8px;
            padding: 20px;
            
        }

        .alert-container h2 {
            font-size: 15px;
            margin-bottom: 20px;
        }

        .alert {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
            background-color: #e6e6e6;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .alert:last-child {
            border-bottom: none;
        }

        .alert .text {
            flex-grow: 1;
        }

        .alert .text h3 {
            margin: 0;
            font-size: 13px;
            font-weight: bold;
        }

        .alert .text p {
            margin: 5px 0 0;
            font-size: 12px;
            color: #666;
        }

        .alert .icon {
            font-size: 1.5em;
            color: #333;
            margin-left: 10px;
        }
        #modal::backdrop{
          background-color:rgba(0,0,0,.55);
          align-items:center;
        }
        #modal1::backdrop{
          background-color:rgba(0,0,0,.55);
          align-items:center;
        }
        #modal {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
#modal1 {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  max-width: 500px; 
  max-height: 500px;
  overflow: auto; 
}

#modal_img {
  width: 90%;
  height: 75%;
  display: block;
  margin: 0 auto;
}

#btn_cerrar1 {
  display: block;
  margin: 15px auto 0;
}

#btn_cerrar {
  display: block;
  margin: 15px auto 0;
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
                <div class="inicio">
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
                      </div>
            </div>
        </aside>
        <section>
            <div class="sup">
              <center>
              <table class="table" id="miTabla">
              <thead>
                    <tr>
                      <th scope="col">Resultados</th>
                    </tr>
                  </thead>
                  <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Tipo de caso</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Prioridad</th>
                        <th scope="col">Caso</th>
                        <th scope="col">Fotografia</th>
                      </tr>
                    </thead>
                  <tbody>
                    <?php
                        $con_sql='SELECT 
                                  i.nombre_completo AS "Nombre",
                                  m.estado_actual AS  "Estado",
                                  m.prioridad AS  "Prioridad",
                                  d.tipo_delito AS "Delito",
                                  d.id_delito AS "Num"
                              FROM 
                                  mandamiento m
                              JOIN 
                                  imputado i ON m.id_imputado = i.id_imputado
                              JOIN 
                                  historial_delictivo h ON i.id_imputado = h.id_imputado    
                              JOIN
                                  delito d ON h.id_delito = d.id_delito
                              ORDER BY 
                                  m.prioridad ASC
                              ';
                        $resultado=mysqli_query($db,$con_sql);
                        $cont=1;
                        while($reg=mysqli_fetch_array($resultado))
                        {

                    ?>
                    <tr>
                      <th scope="row"><input type="checkbox" name="" id=""> <a href="consulta.php" style="color: inherit; text-decoration: none;"><?php echo $reg['Nombre']; ?></a>
                      </th>
                      <td><?php echo $reg['Delito']; ?></td>
                      <td><button type="button" class="btn btn-primary"><?php echo $reg['Estado']; ?></button></td>
                      <td><button type="button" class="btn btn-primary"><?php echo $reg['Prioridad']; ?></button></td>
                      <th scope="col"><?php echo $reg['Num']; ?></th>

                      <?php
                            if($cont==1): ?>
                      <th scope="col"><img src="img/img1.jpg" id="btn_abrir"></th>
                      <?php
                            else: ?>
                      <th scope="col"><img src="img/img2.jpg" id="btn_abrir1"></th>
                      <?php 
                            endif; ?>
                    </tr>
                    <?php
                      $cont=$cont+1;  
                      }
                      ?>
                  </tbody>
              </table>  
              </center>
              

            </div> 
            <div class="containerc">
                <div class="calen">
                  <div class="calendar">
                  <div class="header">
                    <div class="month"></div>
                    <div class="btns">
                      <div class="btn today-btn">
                        <i class="fas fa-calendar-day"></i>
                      </div>
                      <div class="btn prev-btn">
                        <i class="fas fa-chevron-left"></i>
                      </div>
                      <div class="btn next-btn">
                        <i class="fas fa-chevron-right"></i>
                      </div>
                    </div>
                  </div>
                  <div class="weekdays">
                    <div class="day">Dom</div>
                    <div class="day">Lun</div>
                    <div class="day">Mar</div>
                    <div class="day">Mié</div>
                    <div class="day">Jue</div>
                    <div class="day">Vie</div>
                    <div class="day">Sáb</div>
                  </div>
                  <div class="days">
                  </div>
                  </div>
                </div>

                <div class="alert-container">
                  <h2>Alertas</h2>
              
                  <div class="alert">
                      <div class="text">
                          <h3>Buscar y localizar</h3>
                          <p>Revisar la base de datos de SEGIP, SEGELIC, SERECI</p>
                      </div>
                      <div class="icon"><a href="consulta.php" style="text-decoration: none; color: #666;">➔</a></div>
                  </div>
              
                  <div class="alert">
                      <div class="text">
                          <h3>Nuevas actualizaciones</h3>
                          <p>Revisar las nuevas actualizaciones de mandamientos y aprehensiones</p>
                      </div>
                      <div class="icon"><a href="aprehesiones.php" style="text-decoration: none; color: #666;">➔</a></div>
                  </div>
                </div>
                <div class="alert-container">
                  <h2>Reportes</h2>
              
                  <div class="alert">
                      <div class="text">
                          <h3>Generar reporte</h3>
                          <p>Generar reportes estadisticos</p>
                      </div>
                      <div class="icon"><a href="" style="text-decoration: none; color: #666;">➔</a></div>
                  </div>
              
                  <div class="alert">
                      <div class="text">
                          <h3>Historial de reportes</h3>
                          <p>Revisar el historial de reportes del sistema</p>
                      </div>
                      <div class="icon"><a href="" style="text-decoration: none; color: #666;">➔</a></div>
                      </div>
                </div>
            </div>
            
        </section>
    </div>

    <dialog id=modal>
      <img
        src="img/img1.jpg"
        alt=""
        id="modal_img"
      />
      <button type="button" class="btn btn-warning" id="btn_cerrar">Cerrar</button>
    </dialog>

    <dialog id=modal1>
      <img
        src="img/img2.jpg"
        alt=""
        id="modal_img"
      />
      <button type="button" class="btn btn-warning" id="btn_cerrar1">Cerrar</button>
    </dialog>
    <script>
      //inicio modal
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

      //inicio modal
      const btnAbrilModal1=
      document.querySelector("#btn_abrir1");
      const btnCerrar1=
      document.querySelector("#btn_cerrar1");
      const modal1=
      document.querySelector("#modal1");

      btnAbrilModal1.addEventListener("click",()=>{
        modal1.showModal();
      });

      btnCerrar1.addEventListener("click",()=>{
        modal1.close();
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




        const daysContainer = document.querySelector(".days"),
        nextBtn = document.querySelector(".next-btn"),
        prevBtn = document.querySelector(".prev-btn"),
        month = document.querySelector(".month"),
        todayBtn = document.querySelector(".today-btn");

      const months = [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre",
      ];

      const days = ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"];

      const date = new Date();

      let currentMonth = date.getMonth();

      let currentYear = date.getFullYear();
      function renderCalendar() {
        date.setDate(1);
        const firstDay = new Date(currentYear, currentMonth, 1);
        const lastDay = new Date(currentYear, currentMonth + 1, 0);
        const lastDayIndex = lastDay.getDay();
        const lastDayDate = lastDay.getDate();
        const prevLastDay = new Date(currentYear, currentMonth, 0);
        const prevLastDayDate = prevLastDay.getDate();
        const nextDays = 7 - lastDayIndex - 1;


        month.innerHTML = `${months[currentMonth]} ${currentYear}`;

        let days = "";

        for (let x = firstDay.getDay(); x > 0; x--) {
          days += `<div class="day prev">${prevLastDayDate - x + 1}</div>`;
        }

        for (let i = 1; i <= lastDayDate; i++) {

          if (
            i === new Date().getDate() &&
            currentMonth === new Date().getMonth() &&
            currentYear === new Date().getFullYear()
          ) {

            days += `<div class="day today">${i}</div>`;
          } else {

            days += `<div class="day ">${i}</div>`;
          }
        }

        for (let j = 1; j <= nextDays; j++) {
          days += `<div class="day next">${j}</div>`;
        }
        hideTodayBtn();
        daysContainer.innerHTML = days;
      }

      renderCalendar();

      nextBtn.addEventListener("click", () => {

        currentMonth++;
        if (currentMonth > 11) {
          currentMonth = 0;
          currentYear++;
        }

        renderCalendar();
      });


      prevBtn.addEventListener("click", () => {

        currentMonth--;

        if (currentMonth < 0) {
          currentMonth = 11;
          currentYear--;
        }
        renderCalendar();
      });


      todayBtn.addEventListener("click", () => {

        currentMonth = date.getMonth();
        currentYear = date.getFullYear();

        renderCalendar();
      });


      function hideTodayBtn() {
        if (
          currentMonth === new Date().getMonth() &&
          currentYear === new Date().getFullYear()
        ) {
          todayBtn.style.display = "none";
        } else {
          todayBtn.style.display = "flex";
        }
      }

    </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>