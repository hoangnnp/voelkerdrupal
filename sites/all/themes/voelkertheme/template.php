<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function voelkertheme_js_alter(&$javascript) {
    //We define the path of our new jquery core file
    //assuming we are using the minified version 1.8.3
    $jquery_path = drupal_get_path('theme','voelkertheme') . '/js/jquery.js';
    //We duplicate the important information from the Drupal one//
    $javascript[$jquery_path] = $javascript['misc/jquery.js'];
    //..and we update the information that we care about
    $javascript[$jquery_path]['version'] = '1.8.3';
    $javascript[$jquery_path]['data'] = $jquery_path;
    //Then we remove the Drupal core version
    unset($javascript['misc/jquery.js']);
}
function voelkertheme_preprocess_node ( &$vars ) {
    if ($vars["is_front"]) {
        $vars["theme_hook_suggestions"][] = "node__front";
    }
}
