<html>
<head>
<meta charset="UTF-8">
<link href="web/default.css" rel="stylesheet" type="text/css" />
<title>MINIFORO</title>
</head>
<body>
    <div id="cabeza">
        <img src="web/cine.png" alt="mini foro logo">
        <header>MINIFORO versión 1.0</header>
    </div>
    <div id="content">
    <?php 
    // PRIMERA APROXIMACIÓN AL MODELO VISTA CONTROLADOR. 
    // Funciones auxiliars Ej- usuarioOK
    include_once 'app/funciones.php';

    // Activo el control de sesiones
    session_start();

    // No hay ninguna orden muestro la entrada
    if (!isset($_REQUEST['orden']) ){
        include_once 'app/entrada.php';
        exit();
    } 
    // La orden es Entrar anoto el usuario en la session si es correcto
    if ($_REQUEST['orden'] == "Entrar"){
            if ( isset($_REQUEST['nombre']) && isset($_REQUEST['contraseña']) &&
                usuarioOK($_REQUEST['nombre'], $_REQUEST['contraseña'] ) && ($_REQUEST['contraseña']) != '' && (($_REQUEST['nombre']) != '')) {
                    // Anoto el usuario en la session USUARIO CONECTADO 
                    $_SESSION['usuario'] = $_REQUEST['nombre'];
                    echo "<b style='color:green';>Bienvenido ".$_REQUEST['nombre']."!</b><br>";
                   include_once  'app/comentario.html';
                 
                }
                else {
                    echo "<br ><b style='color:red';>Usuario no válido!<b></br>";
                    include_once 'app/entrada.php';
                    
                }
            exit();
    }else {
        // Cualquier otra orden tiene EXISTIR EL USUARIO EN LA SESSION
        if ( !isset($_SESSION['usuario']) ){
            include_once 'app/entrada.php';
            exit();
        }
        // ORDENES QUE SE PUEDEN REALIZAR SI EL USUARIO SE HA AUTENTICADO
        switch ($_REQUEST['orden']){  
            case "Nueva opinión":
                $_REQUEST['tema'] = "";
                $_REQUEST['comentario'] = "";
                echo "<br ><b style='color:blue';>Nueva opinión...<b></br>";
                include_once  'app/comentario.html';
                
                break;
            case "Detalles":
                if(isset($_REQUEST['tema']) and isset($_REQUEST['comentario'])) {

                    include_once 'app/comentariorelleno.php';
                    echo "<br ><b style='color:purple';>Detalles:<b></br>";
                    include_once 'app/detalles.php';
                    break;
                }else{
                    echo "Especifique tema y comente, por favor!";
                    break;
                }
            case "Terminar": 
                $_REQUEST['tema'] = "";
                $_REQUEST['comentario'] = "";
                session_destroy();
                include_once 'app/entrada.php';
                // Cierro la session
        }
        
    }
    ?>
    </div>
</body>
</html>

