<?php
/* Smarty version 3.1.33, created on 2019-08-27 08:54:08
  from '/var/www/testing/smarty/templates/menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6519e0e31741_33446083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f46737c29a5e0702bb30b9316a9a72445988f3' => 
    array (
      0 => '/var/www/testing/smarty/templates/menu.html',
      1 => 1566906845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6519e0e31741_33446083 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-3">
    <div class="list-group">
        <a href="#" class="list-group-item active">Menu usuario</a>
        <a href="cerrar.php" class="list-group-item">Cerrar Session</a>
        <a href="index.php?acc=registrar_usuario" class="list-group-item">Agregar usuario</a>
        <a href="index.php?acc=administrar_usuario" class="list-group-item">Administrar usuario</a>
        <a href="index.php?acc=reporte_usuario" class="list-group-item">Reporte usuario</a>
    </div>

    <div class="list-group">
        <a href="#" class="list-group-item active">Menu empleado</a>
        <a href="index.php?acc=agregar_empleado" class="list-group-item">Agregar empleado</a>
        <a href="index.php?acc=administrar_empleado" class="list-group-item">Administrar empleado</a>
        <a href="index.php?acc=reporte_empleado" class="list-group-item">Reporte empleado</a>
    </div>

</div><?php }
}
