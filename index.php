<?php 

include("includes/config.ini.php");
$smarty->assign("titulo", "inicio");
$smarty->display("header.html");
$smarty->display("menu.html");

/***********************************/

if ($_GET["acc"] && $_GET["acc"]=="registrar_usuario") {
    include("registrar_usuario.php");
}


/**********************************/
$smarty->display("footer.html");


?>