<?php 


/**
 * Plugin name: Asset Management
 * Description: this is a my plugin 
 * Url: http://AssetManagement.com
 * Version: 1.0
 * 
 */

 class as_asset_management {
     public function __construct() {
          add_action('init', array($this, 'initialize'));
     }

     public function initialize() {
          add_action('wp_enqueue_scripts', array($this, 'loade_asset'));
     }

     public function loade_asset() {
          $asset_path = plugin_dir_url(__FILE__);
          $js_path = $asset_path. "js/";
          wp_enqueue_script('script_main_js', $js_path. "index1.js" , ['script_main_js2'], '1.0',  true);  // js file
          wp_enqueue_script('script_main_js2', $js_path. "admin1.js" , [], '1.0',  true);  // new file nici and ai file ta kar upor dependet tar jaigai heldeler ta bose dite heb run ki 2 number file tai age hbe 

          // akta kotha mone rakhte hbe ...joto gulo file nibe same toto gulo wp enqueue nite hbe 


          // $css_path = $asset_path. "css/";
          // wp_enqueue_style('script_main_css', $css_path. "index1.css" , [], '1.0',  'all');   // css file 



     }
 } 
 new as_asset_management();