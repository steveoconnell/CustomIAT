<?php
session_start();
$base_dir = realpath(dirname(__FILE__));

$folder_dir = "../output/";

$sub = isset( $_REQUEST['subject'] ) ? $_REQUEST['subject'] : 'unknown2' ;
$lastname = isset( $_REQUEST['lastname_towrite'] ) ? $_REQUEST['lastname_towrite'] : 'unknownLN' ;
$src = isset( $_REQUEST['src'] ) ? $_REQUEST['src'] : 'HUH' ;

$data = $_REQUEST["data"]; $randtxt = date('Y-m-d-H-s-');
$fh = fopen($folder_dir. $src . "_" . $sub . '-' . $lastname . '-' . $randtxt . '.txt', 'w');
fwrite($fh, $data);
fclose($fh);
?>
