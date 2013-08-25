<?php
$mysqli = new mysqli("host", "user", "password", "db");
if ($mysqli->connect_errno) {
echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
function qrme($urltoqr)
{
$url = urlencode($urltoqr);
echo "<img src=\"http://chart.googleapis.com/chart?chs=500x500&cht=qr&chld=H|1&chl=$url\" />";
}
?>