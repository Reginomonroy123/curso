<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d H:i:s a");

session_start();
$correo = $_SESSION['correo'];
                        
// Máxima duración de sesión activa en hora
define( 'MAX_SESSION_TIEMPO',  3600  *  1);

// Controla cuando se ha creado y cuando tiempo ha recorrido 
$_SESSION['inicio'] = time();

$_SESSION['expira'] = $_SESSION['inicio'] + (1* 3600);
echo date('Y-m-d H:i:s',$_SESSION['inicio']);
echo '<br />';
echo date('Y-m-d H:i:s', $_SESSION['expira']);
echo '<br />';
 if ( isset( $_SESSION[ 'ULTIMA_ACTIVIDAD' ] ) && 
  ( time() - $_SESSION[ 'ULTIMA_ACTIVIDAD' ] > MAX_SESSION_TIEMPO ) ) {

    // Si ha pasado el tiempo sobre el limite destruye la session

    destruir_session();

}

$_SESSION[ 'ULTIMA_ACTIVIDAD' ] = time();

// Función para destruir y resetear los parámetros de sesión
function destruir_session() {

    $_SESSION = array();
    if ( ini_get( 'session.use_cookies' ) ) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - MAX_SESSION_TIEMPO,
            $params[ 'path' ],
            $params[ 'domain' ],
            $params[ 'secure' ],
            $params[ 'httponly' ] );
    }

    session_destroy();
}
