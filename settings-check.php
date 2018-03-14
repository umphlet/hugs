<?php
// Connect to our database
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (!$conn) {
  die('Cound not connect: ' . mysqli_connect_error());
}

// Check if CLEAN_URL is enabled and set page links accordingly
if ($CLEAN_URL == true) {
  $HUG_URL = "/" . $_GET["hug"];
} else {
  $HUG_URL = "/index.php?hug=" . $_GET["hug"];
}

// Check if BASE_URI has proper slashes...
if (preg_match("/^\//i", $BASE_URI) == 0) {  
  $BASE_URI = "/" . $BASE_URI;
}
if (preg_match("/\/$/i", $BASE_URI) == 0) { 
  $BASE_URI .= "/";
}
?>