<?php
/**
**  moo fx pack
**/
drupal_add_js(path_to_theme() . '/scripts/prototype.lite.js');
drupal_add_js(path_to_theme() . '/scripts/moo.fx.js');
drupal_add_js(path_to_theme() . '/scripts/moo.fx.pack.js');
drupal_add_js(path_to_theme() . '/scripts/site.js');

drupal_add_js(path_to_theme() . '/scripts/tooltip.js');

drupal_set_html_head('<!--[if lt IE 7]>
<script defer type="text/javascript" src="' . base_path() . path_to_theme() . '/scripts/png.js"></script>
<style type="text/css" media="all">@import "' . base_path() . path_to_theme() . '/ie.css";</style>
<![endif]-->');

/**
**  set some styles
**/
drupal_set_html_head('<style type="text/css" media="all">@import "' . base_path() . path_to_theme() . '/style.css";</style>');

?>