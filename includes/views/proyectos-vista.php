<?php
 
/**
 * The single post view
 *
 * @package MVC Example
 * @subpackage Single Post View
 * @since 0.1
 */
 
if( !class_exists( proyectosVista) ):
 
/**
 * class to render the html for single posts
 *
 * @package MVC Example
 * @subpackage Single Post View
 * @since 0.1
 */
    class proyectosVista
    {
        /**
         * print the message
         *
         * @package MVC Example
         * @subpackage Single Post View
         *
         * @return string $html the html for the view
         * @since 0.1
         */
        public static function render( $message )
            {
                ?>
                    <h1><?php echo $message; ?></h1>
                    <p>ESTO ES UN COMENTARIO... This is a single post page.</p>
                <?php
            }
    }
endif;
?>