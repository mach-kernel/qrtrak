<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>qrtrak</title>
</head>
<body>
<?php  
include("config.php");
if (isset($_GET['part'])) 
{
$part = $_GET['part'];
$mysqli->real_query("SELECT * FROM parts WHERE serial='$part'");
$res = $mysqli->use_result();
$entry = $res->fetch_assoc();
//temporary fix for invalid serial numbers 08.06.12
if(empty($entry['serial'])){echo 'No match found for tag <strong>'.$_GET['part'].'</strong> <a href="/"> Search again</a>?<!--';}

?>
<h1>Viewing data for: <? echo $entry['serial'];?></h1>
<p><a href = "/">Search for another part by serial number</a>
<table width="650" border="1" cellspacing="2" cellpadding="4">
<tr>
<td width="82"><strong>Date:</strong></td>
<td width="540"><? echo $entry['date2'] ?></td>
</tr>
<tr>
<td><strong>Time:</strong></td>
<td><? echo $entry['time2'] ?></td>
</tr>
<tr>
<td><strong>Plant:</strong></td>
<td><? echo $entry['plant'] ?></td>
</tr>
<tr>
<td><strong>Device:</strong></td>
<td><? echo $entry['device'] ?></td>
</tr>
<tr>
<td><strong>AC Power:</strong></td>
<td><? echo $entry['acpower'] ?></td>
</tr>
<tr>
<td><strong>Motor Force:</strong></td>
<td><? echo $entry['motorforce'] ?></td>
</tr>
<tr>
<td><strong>Firmware:</strong></td>
<td><? echo $entry['firmware'] ?></td>
</tr>
<tr>
<td><strong>Base Code:</strong></td>
<td><? echo $entry['basecode'] ?></td>
</tr>
<tr>
<td><strong>Addr Table:</strong></td>
<td><? echo $entry['addrtable'] ?></td>
</tr>
<tr>
<td><strong>Room Name :</strong></td>
<td><? echo $entry['roomname'] ?></td>
</tr>
<tr>
<td><strong>Motor:</strong></td>
<td><? echo $entry['motor'] ?></td>
</tr>
<tr>
<td><strong>Zone:</strong></td>
<td><? echo $entry['zone'] ?></td>
</tr>
<tr>
<td><strong>Device UID:</strong></td>
<td><? echo $entry['deviceuid'] ?></td>
</tr>
<tr>
<td><strong>Device Name:</strong></td>
<td><? echo $entry['devicename'] ?></td>
</tr>
<tr>
<td><strong>System Type:</strong></td>
<td><? echo $entry['systemtype'] ?></td>
</tr>
<tr>
<td><strong>Motor Mode</strong></td>
<td><? echo $entry['motormode'] ?></td>
</tr>
<tr>
<td><strong>Button Per</strong></td>
<td><? echo $entry['buttonper'] ?></td>
</tr>
<tr>
<td><strong>direction</strong></td>
<td><? echo $entry['direction'] ?></td>
</tr>
<tr>
<td><strong>busaddr1</strong></td>
<td><? echo $entry['busaddr1'] ?></td>
</tr>
<tr>
<td><strong>busaddr2</strong></td>
<td><? echo $entry['busaddr2'] ?></td>
</tr>
<tr>
<td><strong>busaddr3</strong></td>
<td><? echo $entry['busaddr3'] ?></td>
</tr>
<tr>
<td><strong>busaddr4</strong></td>
<td><? echo $entry['busaddr4'] ?></td>
</tr>
<tr>
<td><strong>busaddr5</strong></td>
<td><? echo $entry['busaddr5'] ?></td>
</tr>
<tr>
<td><strong>busaddr6</strong></td>
<td><? echo $entry['busaddr6'] ?></td>
</tr>
<tr>
<td><strong>busaddr7</strong></td>
<td><? echo $entry['busaddr7'] ?></td>
</tr>
<tr>
<td><strong>busaddr8</strong></td>
<td><? echo $entry['busaddr8'] ?></td>
</tr>
<tr>
<td><strong>shadetype</strong></td>
<td><? echo $entry['shadetype'] ?></td>
</tr>
<tr>
<td><strong>botype</strong></td>
<td><? echo $entry['botype'] ?></td>
</tr>
<tr>
<td><strong>boaddr</strong></td>
<td><? echo $entry['boaddr'] ?></td>
</tr>
<tr>
<td><strong>lvporttype</strong></td>
<td><? echo $entry['lvporttype'] ?></td>
</tr>
<tr>
<td><strong>lvportfunction</strong></td>
<td><? echo $entry['lvportfunction'] ?></td>
</tr>
<tr>
<td><strong>lvportaddress</strong></td>
<td><? echo $entry['lvportaddress'] ?></td>
</tr>

<tr>
<td><strong>QR Code</strong></td>
<td><? qrme("http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']); ?></td>
</tr>
</table> 
<?
}
else header( 'Location: /' ) ;
?>
</table>
</body>
</html>