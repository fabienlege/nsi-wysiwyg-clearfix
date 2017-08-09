<?php
/*
Plugin Name: NSI Wysiwyg Clearfix
Plugin URI: https://www.agenceho5.com
Description: Permet d'ajouter au Wysiwyg wordpress un nouveau bouton qui ajoute  au contenu une balise div avec la class clearfix (<div class="clearfix"></div>)
Author: Fabien LEGE
Version: 1.0
Author URI: https://www.fabienlege.fr/
*/

add_filter( 'mce_buttons', 'nsi_wysiwyg_clearfix_register_buttons' );

function nsi_wysiwyg_clearfix_register_buttons( $buttons ) {
   array_push( $buttons, 'separator', 'nsiclearfix');

   return $buttons;
}
 
// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
add_filter( 'mce_external_plugins', 'nsi_wysiwyg_clearfix_register_tinymce_javascript' );

function nsi_wysiwyg_clearfix_register_tinymce_javascript( $plugin_array ) {
   $plugin_array['nsiclearfix'] = plugins_url( '/nsi-wysiwyg-clearfix.js',__FILE__ );
   return $plugin_array;
}

function nsi_wysiwyg_clearfix_register_tinymce_css( $mce_css ) {
	if ( ! empty( $mce_css ) )
		$mce_css .= ',';

	$mce_css .= plugins_url( 'nsi-wysiwyg-clearfix.css', __FILE__ );

	return $mce_css;
}
add_filter( 'mce_css', 'nsi_wysiwyg_clearfix_register_tinymce_css' );