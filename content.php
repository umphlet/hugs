<?
// Check if we're showing the table of who has hugs.
if ($_GET["view"] == "who-has-hugs") {
  $TITLE_TAG = "Let's see who has hugs so far!";
  include("header.php");
  include("list.php");
}
// Add a hug
else if ($_GET["hug"]) {
  $TITLE_TAG = "Thanks for hugging!";
  $name = $_GET["hug"];
  include("header.php");
  include("newhug.php");
} else if ($_POST["hug"]) {
  $TITLE_TAG = "Thanks for hugging!";
  $name = $_POST["hug"];
  include("header.php");
  include("newhug.php");
}
// Show main page if not viewing or adding a hug
else if (!$_GET["view"] && !$_GET["hug"] && !$_POST["hug"]) {
  $TITLE_TAG = "Welcome to Hugs.";
  include("header.php"); 
?>

<h1>Hug Somebody!</h1>

<? include("form.php"); }
// 404
else {
  header("HTTP/1.0 404 Not Found", true, 404);
  echo "Error 404 Not Found";
}
?>