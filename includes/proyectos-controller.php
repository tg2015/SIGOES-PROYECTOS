<?php
 
/**
 * The main plugin controller
 *
 * @package MVC Example
 * @subpackage Main Plugin Controller
 * @since 0.1
 */
class proyectosController
{
    /**
     * the class constructor
     *
     * @package MVC Example
     * @subpackage Main Plugin Controller
     *
     * @since 0.1
     */
    public function __construct()
    {
    if( !is_admin() ):
        add_action( 'wp', array( $this, 'init' ) );
    endif;
    }
    /**
 * callback for the 'wp' action
 *
 * In this function, we determine what WordPress is doing and add plugin actions depending upon the results.
 * This helps to keep the plugin code as light as possible, and reduce processing times.
 *
 * @package MVC Example
 * @subpackage Main Plugin Controller
 *
 * @since 0.1
 */
public function init()
{
    //is this a post display page? If so, then filter the content\
    if( is_single() )
        add_filter( 'the_content', array(&$this, 'render_proyectos_vista' ) );


//Esto lo he agregado desde el archivo admin de gabo


//fin de archivo admin




}


public function render_proyectos_vista( $content )
{
    //require_once our model
    require_once( 'models/proyectos-modelo.php' );
    //instantiate the model
    $proyectoModelo = new proyectosModelo;
 
    //get the message
    $message = $proyectoModelo->get_message();
 
    //require_once our view
    require_once( 'views/proyectos-vista.php' );
 
    //render the view
    $content = proyectosVista::render( $message ) . $content ;
 
    //return the result
    return $content;
}
}
 $foo = new proyectosController;

?>