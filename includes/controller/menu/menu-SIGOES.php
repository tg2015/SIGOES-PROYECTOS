<?php

function dir_proyectosController(){
require_once(PLUGIN_URL.'SIGOES-PROYECTOS/includes/proyectos-controller.php');
}

function add_menu_proyecto(){
//Esta es una funcion nativa de wordpress
add_menu_page(
//parametros para mostrarse en el menu de wordpress, son las configuraciones de la opcion mostrada: "prueba"
'Gestion Proyectos',//titulo de la pagina 1
'Proyectos',//Boton
1,//Prioridad
'proyectos-controller.php',//fichero
'dir_proyectosController'//funcion
);
//Esta es una funcion nativa de wordpress
//Añade los submenus en wordpress
add_submenu_page('proyectos-controller.php','Crear','Obtener',1,'sp_admin_page_2.php','sp_admin_page_2');
}
?>