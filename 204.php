<?php

// trick browser into staying on same page
$ibrowser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
if ($ibrowser == false) {
header("HTTP/1.0 204 No Response");
}

	include "load_config.php";

	//Open an ip stream
	$fp = stream_socket_client("tcp://".$ip.":".$port, $errno, $errstr, 30);

	$debug = 0;

	//Work out the volume level
	$volume = $_POST["volume"];
	$volume = $volume > $max_volume ? $max_volume : $volume;
	$volume = strtoupper (dechex ($volume));
	if(strlen($volume)==1) $volume = "0".$volume;
	$volume = "!1MVL".$volume;
	//exit();
	//send a command to the amp if a button is pressed
	if (isset ($_POST["cmd"])) {
		if ($_POST["cmd"] == "volume") {
			$var1 = $volume;
			$task = send_cmd($var1, $fp, $debug);
		}
		elseif ($_POST["cmd"] == "status") {
			$var2 = get_status("!1DIFQSTN", $fp, $debug);
		}
		else {
			$var1 = $_POST["cmd"];
			$task = send_cmd($var1, $fp, $debug);
		}
	}
	else {
		$var1 = "Not Set";
	}

	fclose($fp);


	function send_cmd($cmd, $fp, $debug){
		$length=strlen($cmd);
		$length=$length+1;
		$total =$length+16;
		$code  =chr($length);
		$line  ="ISCP\x00\x00\x00\x10\x00\x00\x00$code\x01\x00\x00\x00".$cmd."\x0D";
		if ($debug) {
			echo "\n*** send_cmd:".$line;
		}
		fwrite($fp, $line);
		return $line;
	}

	function get_status($cmd, $fp, $debug){
		do {
			send_cmd($cmd, $fp, $debug);
			$status = "";
			$status = fread($fp, 80);
			$status = substr($status, strpos($status, "!"));
			$status = substr($status, 0, strlen($status)-3);
			if ($debug) {
				echo "\n*** get_status:".$cmd." : ".$status;
			}
		} while (substr_compare($status, "!1NTM", 0, 5) == 0);
		return $status;
	}

?>

<?

if ($ibrowser == true) {
print "<html>
<head>
<title>Sending Command...</title>`
<meta http-equiv=\"refresh\" content=\"0;url=index.php\">
</head>
<body></body>
</html>";
}

?>
