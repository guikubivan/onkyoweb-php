<?php
// Parse without sections
$ini_array = parse_ini_file("config.ini");
$ip = $ini_array["ip"];
$port = $ini_array["port"];
$max_volume = $ini_array["max_volume"];
?>
