global $mysqli;
$db_host = "192.168.100.254";
$db_user = "klient";
$db_pass = "*********";
$db_name = "klient";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_error) {
die("Connection failed: " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");