<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MechoSystems Parts Database</title>
<style>td{border:1px solid black; padding:3px;}</style>
</head>
<body>
<h1>Viewing all entries</h1>
<?php
include('config.php');
$query = "SELECT * FROM parts" ;
//TO DO convert to tableless layout
do {
if (!$stmt = $mysqli->query($query)) {
print $mysqli->error."<br />";
print "Failed to resolve query <br />";
}
else {
print '<script src="sorttable.js"></script><table class="sortable"><tr><th>Serial</th><th>Date</th><th>Time</th><th>Plant</th><th>Device</th><th>AC Power</th><th>Motor Force</th></tr>';
while( $row = $stmt->fetch_row() ) {
print "<tr>";
//for ($i = 0;$i < $mysqli->field_count;$i++) {
for ($i = 0;$i < 7;$i++) {
print '<td><a href=/view.php?part=' . $row[0]. '>'.$row[$i]."</a></td>";
}
print "</tr>\n"; 
}
}
}
while( $mysqli->next_result());
print "</table>"; 
$mysqli->close(); 
?>
</body>
</html>