<!DOCTYPE HTML>
<html lang="en">
<?
// Include config file
require_once("hugs-config.php");

// Connect to our database
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (!$conn) {
  die('Cound not connect: ' . mysqli_connect_error());
}

// Check if CLEAN_URL is enabled and set page links accordingly
if ($CLEAN_URL == true) {
  $HUG_URL = "./" . $_GET["hug"];
} else {
  $HUG_URL = "./index.php?hug=" . $_GET["hug"];
}

// Main content file
require_once("content.php");
require_once("footer.php");
?>
</body>
</html>