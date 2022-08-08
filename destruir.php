<?php
session_start();
session_destroy();
echo '<script language="javascript">alert("Sesión cerrada correctamente");
window.location.href="index.php";</script>';

exit();

?>
