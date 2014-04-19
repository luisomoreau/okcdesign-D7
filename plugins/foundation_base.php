<?php
/**
 * @file
 *
 * This plugin does only things required to make foundation works with Drupal.
 * Js & css file are still added info file for now, though.
 */

class foundation_base {

  static function hook_html_head_alter(&$head_elements) {

    // HTML5 charset declaration.
    $head_elements['system_meta_content_type']['#attributes'] = array(
      'charset' => 'utf-8',
    );

    // Optimize mobile viewport.
    $head_elements['mobile_viewport'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array(
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1.0',
      ),
    );

    // Remove image toolbar in IE.
    $head_elements['ie_image_toolbar'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array(
        'http-equiv' => 'ImageToolbar',
        'content' => 'false',
      ),
    );
  }

  static function hook_css_alter(&$css) {
    // keep those css, so that overlay, shortcut, toolbar and contextual links
    // still works as expected.
    $css_to_keep = array(
      'modules/system/system.base.css',
      //'modules/system/system.theme.css',
      'modules/contextual/contextual.css',
      'modules/toolbar/toolbar.css',
      'modules/shortcut/shortcut.css',
      'modules/overlay/overlay-parent.css',
    );

    // remove all others
    foreach($css as $path => $values) {
      if(strpos($path, 'modules/') === 0 && !in_array($path, $css_to_keep)) {
        unset($css[$path]);
      }
    }
  }

}