<?php
function pile_config()
{
	return [
		'fn' => "pile-89312416230.txt",
	];
}

function pile_encode($o)
{
	return json_encode($o, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
