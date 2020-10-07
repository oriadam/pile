<?php
require('pile-config.php');
header("Content-type: text/plain");
$conf = pile_config();
$fn = $conf['fn'];

if ($_GET['remove_the_file'])
{
	unlink($fn);
	die('file removed');
}

$o = [
	'date' => date('c'),
];

if ($_POST)
	$o['POST'] = $_POST;
if ($_GET)
	$o['GET'] = $_GET;
    
$str = pile_encode($o) . ",\n";
file_put_contents($fn,$str,FILE_APPEND);
?>1
