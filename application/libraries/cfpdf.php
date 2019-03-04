<?php if ( !defined('BASEPATH')) exit();

class cfpdf
{
    function __construct()
    {
 
        require_once APPPATH.'/libraries/fpdf181/fpdf.php';
    }
}