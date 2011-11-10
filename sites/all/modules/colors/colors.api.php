<?php

/**
 * @file
 * Hooks provided by the FullCalendar module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Gets the color configuration mapping.
 *
 * @return
 *   Mapping between the colorable features and the CSS input.
 */
function colors_colors_get_color_mapping() {
  return array(
    'background' => 'background-color',
    'text' =>  'color',
    'border' => 'border-color',
  );
}

/**
 * Builds a selector string.
 *
 * @param $class
 *   Class name used for the new selector string.
 *
 * @return
 *   The built selector.
 */
function hook_colors_build_selector($class) {
  $selector = '.' . $class . ',';
  $selector .= '.' . $class . 'a';
  return $selector;
}

/**
 * @} End of "addtogroup hooks".
 */
