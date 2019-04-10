<?php
/*
    Plugin Name: WP DomPDF
    Description: Plugin para utilizar librería DomPDF en Wordpress
    Plugin URI: https://www.dhenriquez.cl
    Author: Daniel Henríquez
    Author URI: https://www.dhenriquez.cl
    Version: 1.0.0
*/

define('WP_DOMPDF_PLUGIN', plugin_dir_path(__FILE__));

require_once WP_DOMPDF_PLUGIN . 'lib/plugin-update-checker/plugin-update-checker.php';
require_once WP_DOMPDF_PLUGIN . 'lib/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$PUC = Puc_v4_Factory::buildUpdateChecker( 'https://github.com/dhenriquez/wp-dompdf', __FILE__, 'wp-dompdf');
$PUC->setAuthentication('1f379bdf369d399e7132348a985e52e323270e3f');

function wp_dompdf(){
    return new Dompdf();
}

?>