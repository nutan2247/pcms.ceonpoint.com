<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Load the Composer autoload file for DOMPDF
require_once APPPATH.'third_party/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Pdf { 
    public function __construct() {
        // Initialize DOMPDF
        $pdf = new Dompdf();

        // Get CI instance
        $CI =& get_instance();

        // Assign the DOMPDF instance to a CI variable
        $CI->dompdf = $pdf;
    }
}
?>
