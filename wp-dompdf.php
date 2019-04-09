<?php
/*
    Plugin Name: WP DomPDF
    Description: Plugin para utilizar librería DomPDF en Wordpress
    Plugin URI: https://www.dhenriquez.cl
    Author: Daniel Henríquez
    Author URI: https://www.dhenriquez.cl
    Version: 0.8.3
*/

define('WP_DOMPDF_PLUGIN', plugin_dir_path(__FILE__));

require_once WP_DOMPDF_PLUGIN . 'lib/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

if(class_exists('Dompdf')){
    function wp_dompdf(){
        return new Dompdf();
    }
}

?>