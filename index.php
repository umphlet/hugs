<!DOCTYPE HTML>
<html lang="en">
<?
// Include config file
require_once("hugs-config.php");

// Check if CLEAN_URL is enabled and set page links accordingly
if ($CLEAN_URL == true) {
  $HUG_URL = "./" . $_GET["hug"];
} else {
  $HUG_URL = "./index.php?hug=" . $_GET["hug"];
}

// Main content file
require_once("content.php");
?>
</body>
</html>