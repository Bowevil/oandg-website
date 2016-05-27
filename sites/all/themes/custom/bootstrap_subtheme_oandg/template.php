<?php

/**
 * @file
 * template.php
 */

function bootstrap_subtheme_oandg_preprocess_page(&$variables) {
 // Add information about the number of sidebars.
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['content_column_class'] = ' class="col-sm-3"';
  }
  elseif (!empty($variables['page']['sidebar_first']) || !empty($variables['page']['sidebar_second'])) {
    $variables['content_column_class'] = ' class="col-sm-8"';
  }
  else {
    $variables['content_column_class'] = ' class="col-sm-12"';
  }
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['content_column_class'] = ' class="col-sm-3"';
  }

    drupal_add_js(drupal_get_path('bootstrap', 'bootstrap_subtheme_oandg') . 'jasny-bootstrap/js/jasny-bootstrap.js');
}

/**
 * Implements theme_menu_link().
 *
 * Theme the cart menu link.
 */
//function bootstrap_subtheme_oandg_menu_tree__menu_mason_division_menu($variables) {
  //$output = '<button type="button" class="" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">Button</button><ul><div class="sub navmenu navmenu-default navmenu-left">' . $variables['tree'] . '</div></ul>';
  //return $output;
//}