<?php
$json = file_get_contents('php://input');
$obj = json_decode($json);
$result = array ();
foreach ($obj as $item) {
	$item2=strtolower($item);
	$item3=strrev($item2);
	if ($item3 == $item2)	array_push($result, $item);
	
}
echo json_encode($result);