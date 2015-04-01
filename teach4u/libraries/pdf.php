<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter PDF Library
 * Created on : 16-feb-2015
 * Author     : Hideki
 */

require_once APPPATH.'/third_party/phppdf/html2fpdf.php';

class Pdf
{
    public function generate($html,$file)
    {
        $pdf = new HTML2FPDF();
        $pdf -> AddPage();
        $pdf -> WriteHTML($html);
        $pdf -> Output($file.'_teach4u_'.time().'.pdf','D');
    }
}
