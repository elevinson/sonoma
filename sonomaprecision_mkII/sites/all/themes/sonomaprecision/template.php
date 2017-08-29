<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

/**
 * page preprocessing
 */
function sonomaprecision_preprocess_page(&$variables) {
  if (isset($variables['node'])) {
    if ($variables['node']->type == 'front_page') {
      drupal_add_css(drupal_get_path('theme', 'sonomaprecision') . '/css/slick.css');
      drupal_add_js(drupal_get_path('theme', 'sonomaprecision') . '/js/slick.min.js');
      drupal_add_js(drupal_get_path('theme', 'sonomaprecision') . '/js/slider.js');
    }
  }  
 
}
/**
 * Field collection preprocessing
 */
function sonomaprecision_preprocess_field(&$variables, $hook) {
  if ($variables['element']['#entity_type'] == 'field_collection_item') {
    // Check if the bundle name (i.e. the field collection field name) is
    // among the theme hook suggestions.
    $index = array_search('field__' . $variables['element']['#bundle'],
      $variables['theme_hook_suggestions']);

    // Remove the bundle theme hook suggestion.
    if ($index !== false) {
      unset($variables['theme_hook_suggestions'][$index]);
    }
  }
}