<?php
session_start();  // Inicia la sesión
session_unset();  // Elimina todas las variables de sesión
session_destroy();  // Destruye la sesión
header("Location: /simulador-pagos/");
exit();  // Asegura que no se siga ejecutando el script
