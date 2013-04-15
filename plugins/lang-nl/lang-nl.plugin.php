<?php

/*
Plugin Name: Language-NL Plugin
Plugin URI: https://paste8.com/
Description: Dutch translation for PHP-Pastebin-v3
Version: 1.0
Author: Decimo
Author URI: https://twitter.com/0taku_
*/


//set plugin id as file name of plugin
$plugin_id = basename(__FILE__);

//some plugin data
$data['name'] = "Dutch translation";
$data['author'] = "Decimo";
$data['url'] = "https://twitter.com/0taku_";

//register plugin data
register_plugin($plugin_id, $data);

//plugin function
function add_NL_lang() {
   global $hook,$lang; 
   $hook->addMenuLang('nl',$lang["dutch"],'?strLangue=nl','nl.png','6');
}

add_hook('action','add_NL_lang');
