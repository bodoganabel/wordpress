<?php

/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package vw-template

 * @since 1.0.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}

//innen folytatom: https://www.wpbeginner.com/wp-themes/how-to-add-dynamic-widget-ready-sidebars-in-wordpress/


?>
<div id="vw-page-template-container" class="vw-page-template-container">
    <div class="vw-header-container">
		<?php get_header(); ?>
    </div>
    <div class="vw-content-container" style="display: flex;">
        <div class="vw-left-sidebar">
            <?php dynamic_sidebar( 'sidebar-left' ); ?>
        </div>
        <div class="vw-page-content" style="flex: 1">
            <?php astra_primary_content_top(); ?>
            <?php astra_content_page_loop(); ?>
            <?php astra_primary_content_bottom(); ?>
        </div>
        <div class="vw-right-sidebar">
            <?php dynamic_sidebar( 'sidebar-right' ); ?>
        </div>
    </div>
	<div class="vw-footer-container">
		<?php get_footer(); ?>
    </div>

</div>
<?php 
