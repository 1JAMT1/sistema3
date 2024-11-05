<?php
require 'includes/config/database.php';
$db = conectarDB();
$errores = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $e = isset($_POST['ema']) ? mysqli_real_escape_string($db, $_POST['ema']) : '';
    $p = isset($_POST['pas']) ? mysqli_real_escape_string($db, $_POST['pas']) : '';
    
    if (!$e) {
        $errores[] = "El email es obligatorio";
    }
    if (!$p) {
        $errores[] = "La contraseña es obligatoria";
    }
    
    if (empty($errores)) {
        $con_sql = "SELECT * FROM usuarios WHERE email='$e'";
        $res = mysqli_query($db, $con_sql);
        
        if ($res && $res->num_rows) {
            $usuario = mysqli_fetch_array($res);
            if($usuario['contrasena']==$p){
                $auth = true; 
            }else{
                $auth = false; 
            }
            ##password_verify($p, $usuario['contrasena']);
            
            if ($auth) {
                session_start();
                $_SESSION['usuario'] = $usuario['gmail'];
                $_SESSION['idUsuario']=$usuario['idusuario'];
                $_SESSION['login'] = true;
                $_SESSION['pass']=$usuario['password'];
                header("Location: /sistema1/inicio.php");
                exit();
            } else {
                $errores[] = "La contraseña es incorrecta";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        header {
            background-color: #7cb46c;
            padding: 8px;
            padding-left: 19px;
            position: relative;
            color: #ebe8e8;
            
        }
        .flex-r ,.flex-c {
            justify-content: center;
            align-items: center;
            display: flex;
        }
        .flex-c{
            flex-direction: column;
        }
        .flex-r{
            flex-direction: row;
        }
        .container{
            width: 100%;
            min-height: 90vh;
            padding: 20px 10px;
            background: #ffffff;  
        }
        .login-text{
            width: 400px;
            background-color: #ebe8e8;
            max-width: 400px;
            min-height: 400px;
            border-radius: 10px;
            padding: 20px 30px;
            box-shadow: 10px 10px 20px 5px rgba(0, 0, 0, 0.3);
        }
        .login-text h1{
            font-size: 20px;
        }
        .login-text p{
            font-size: 15px;
            color: #000000B2;
        }
        form{
            align-items: flex-start !important;
            width: 100%;
            margin-top: 12px;
        }
        .input-box{
            margin: 7px 0px;
            width: 100%;
        }
        .label{
            font-size: 14px;
            color: black;
            margin-bottom: 3px;
        }
        .input{
            background-color: #F6F6F6;
            padding: 0px 5px;
            border: 2px solid rgba(216, 216, 216, 1);
            border-radius: 10px;
            overflow: hidden;
            justify-content: flex-start;
        }
        input{
            border: none;
            outline: none;
            padding: 10px 5px;
            background-color: #F6F6F6;
            flex: 1;
        }
        form .check + .check {
            margin-left: 15px;
        }
        .check {
            display: flex;
        }
        .check span{
            color:#000000B2;
            font-size: 15px;
            font-weight: bold;
            margin-left: 5px;
            margin-right: 20px;
        }
        .btn{
            color: #ffffff;
            border-radius: 5px;
            padding: 10px 135px;
            background: #568ca2;
            margin-top: 30px;
            margin-bottom: 10px;
            font-size: 16px;
            transition: all 0.3s linear;
        }
        .btn:hover{
            transform: translateY(-2px);
        }
        
    </style>
</head>

<body>
    <header class="cabecera">
         <p><i class="fas fa-lock-open"></i>  Sistema de consultas de Mandamientos y Aprehensiones</p>
    </header>
    <div class=" flex-r container">
        <div class="flex-r login-wrapper">
            <div class="login-text">
                <h1>Iniciar sesión</h1>
                <?php foreach ($errores as $error):?>
                    <div class="alerta error">
                    <?php echo $error; ?>
                    </div>
                <?php endforeach; ?>
                <form action="" method="post" class="flex-c">
                    <div class="input-box">
                        <span class="label">Correo electronico o usuario</span>
                        <div class=" flex-r input">
                            <input type="email" name="ema" id="ema" placeholder="Correo electronico o usuario" >
                        </div>
                    </div>
                    
                    <div class="input-box">
                        <span class="label">Contraseña</span>
                        <div class="flex-r input">
                            <input type="password" name="pas" id="pas" placeholder="ingrese su contraseña">
                            
                        </div>
                    </div>
                    
                    <div class="input-box">
                        <span class="label">Código 2FA</span>
                        <div class="flex-r input">
                            <input type="password" >
                        </div>
                    </div>

                    <div class="check">
                        <input type="checkbox" name="" id="">
                        <span>App Autenticator</span>
                        <input type="checkbox" name="" id="">
                        <span>Email</span>
                    </div>
                    <input class="btn" type="submit" value="Ingresar">
                    

                    </form>

            </div>
        </div>
    </div>
</body>

</html>
