<?php

require_once(dirname(__FILE__) . "/../include/time_start.php");
require_once(dirname(__FILE__) . "/../include/layout.php");
require_once(dirname(__FILE__) . "/../include/stats.php");

if(!isset($range) OR !is_numeric($range)) {
  if(isset($_GET["range"]) AND is_numeric($_GET["range"])) {
    $range = $_GET["range"];
  } elseif(isset($_COOKIE["range"]) AND is_numeric($_COOKIE["range"])) {
    $range = $_COOKIE["range"];
  } else {
    $range = 86400;
  }
}
setCookie("range", $range, time()+2592000);
setCookie("range", $range, time()+2592000,'/netplan/ajax/');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
  <link rel='stylesheet' href='../css/gserverl.css' type='text/css'></link>
  <title>Routerstatistik Zusammenfassung</title>
</head>

<body>
<?php printMenu(); ?>

<div id='stats' class='normalbox'>
<?php
        echo get_header($range);
	flush();
        echo get_internet_summary($range);
	flush();
        echo get_backbone_summary($range);
	flush();
        echo get_ap_summary($range);
	flush();
?>
</div>

<div class='normalbox'>
<?php require(dirname(__FILE__) . "/../include/time_end.php"); ?>
</div>

</body>
</html>
