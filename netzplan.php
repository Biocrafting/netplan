<?php

require_once(dirname(__FILE__) . "/include/time_start.php");
require_once(dirname(__FILE__) . "/include/layout.php");
require_once(dirname(__FILE__) . "/include/dot.php");

convertDB2Dot();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
  <link rel='stylesheet' href='css/gserverl.css' type='text/css'></link>
  <title>Netplan v2</title>
</head>

<body>
  <?php printMenu(); ?>
    <img alt="Netzplan Grafik des FBN"  class='normalbox' src='tmp/dotplan.png' usemap='#netplan' />
<?php require_once(dirname(__FILE__) . "/tmp/dotplan.map"); ?>
  <div class='normalbox'>
    <?php require(dirname(__FILE__) . "/include/time_end.php"); ?>
  </div>
</body>
</html>
