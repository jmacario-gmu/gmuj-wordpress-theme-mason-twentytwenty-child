<?php
// Style TinyMCE to look more like the Mason theme.
function custom_editor_styles() {
  add_editor_style( 'css/editor-style-classic.css');
  add_editor_style( 'css/editor-style-block.css');
}
add_action( 'admin_init', 'custom_editor_styles' );
?>