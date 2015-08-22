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
            <div class="wrap"> 
                <form method="post">
                    <!-- wp_nonce_field('accion'); funcion nativa de wordpress -->
                       <?php wp_nonce_field('update-options');?>
                       <table class="form-table">
                         <tr valign="top">
                         <th scope="row">Nombre</th>
                          <td>
                            <input type="text" name="nombre" value=""/></td>
                       </tr>
                         <tr valign="top">
                         <th scope="row">Apellido</th>
                            <td>
                              <input type="text" name="apellido" value=""/></td>
                       </tr>
                       </table>
                         <input type="hidden" name="action" value="update"/>
                         <input type="hidden" name="page_options" value="nombre,apellido"/>
                       <p class="submit">
                        <!-- cada button tiene su tipo de class para visualizarse de distintas formas en wordpress -->
                            <td><input name="guardar" type="submit" class="button-primary" value="Guardar cambios" /></td>
                            <td><input name="actualizar" type="submit" class="button-primary" value="Actualizar" /></td>
                            <td><input name="borrar" type="submit" class="button-primary" value="Borrar" /></td>
                       </p>
                     </form>
            </div>




                <?php
            }
    }
endif;
?>