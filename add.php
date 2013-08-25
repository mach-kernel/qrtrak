<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>qrtrak</title>
</head>
<body>
<?php
include("config.php");
if (isset($_GET['action'])) 
{
$action = $_GET['action'];
if ($action == "insertdb")
{
$serial = $_POST['ptsn'];
$name = $_POST['ptname'];
$description = $_POST['ptdesc'];
$category = $_POST['ptcat'];
$sql="INSERT INTO parts values('$serial','$name','$description','$category')";
$mysqli->real_query($sql);
?>
<h1>Part <span style="color:orange;"><? echo $serial ?></span> added successfully!</h1>
<p>QR code below <a href = "/">Back to home</a> </p>
<table width="650" border="1" cellspacing="2" cellpadding="4">
<tr>
<td width="82"><strong>Title:</strong></td>
<td width="540"><? echo $name ?></td>
</tr>
<tr>
<td><strong>Serial Number: </strong></td>
<td><? echo $serial ?></td>
</tr>
<tr>
<td><p><strong>Category:</strong></p></td>
<td>category</td>
</tr>
<tr>
<td><strong>Description:</strong></td>
<td><? echo $description ?></td>
</tr>
<tr>
<td><strong>QR Code</strong></td>
<td><? qrme("http://" . $_SERVER['SERVER_NAME'] .'/view.php?part=' . $serial  )?></td>
</tr>
</table> 
<?
}
if ($action == "add")
{
?>
<h1>Add a part</h1>
<p> Fill the form out below or <a href = "index.php">go back from whence you came.</a> </p>
<form id="form1" name="form1" method="post" action="manage.php?action=insertdb">
<table width="650" border="1" cellspacing="2" cellpadding="4">
<tr>
<td width="82"><strong>Title:</strong></td>
<td width="540"><input name="ptname" type="text" id="ptname" /></td>
</tr>
<tr>
<td><strong>Serial Number: </strong></td>
<td><input name="ptsn" type="text" id="ptsn" /></td>
</tr>
<tr>
<td><p><strong>Category:</strong></p></td>
<td><select name="ptcat" id="ptcat">
<option value="1">Type 1</option>
<option value="2">Type 2</option>
<option value="3">Type 2 A</option>
<option value="4">Other</option>
</select></td>
</tr>
<tr>
<td><strong>Description:</strong></td>
<td><textarea name="ptdesc" cols="50" rows="15" id="ptdesc"></textarea></td>
</tr>
</table> 
<p>
<input type="submit" name="addptBt" id="addptBt" value="Add Part" />
</p>
</form>
<?
}
}
else header( 'Location: /' ) ;

?>
</body>
</html>