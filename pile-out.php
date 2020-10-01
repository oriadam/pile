<?php
require('pile-config.php');
header("Content-type: text/plain");
$conf = pile_config();
$fn = $conf['fn'];

?>[
<?php

if ($_GET['date'])
{
	$arr = json_decode("[".file_get_contents($fn)."null]", true);
	$date = strtotime($_GET['date']);
	echo "// showing results after ".date('c',$date)."\n";
	foreach($arr as $o)
	{
		if (strtotime($o['date']) > $date)
		{
			echo pile_encode($o);
		}
	}
}
else
{
	readfile($fn);
}
?>

]
