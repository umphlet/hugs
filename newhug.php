<?
  $table_check = mysqli_query($conn, "SELECT 1 FROM HUGS_DATA LIMIT 1");
  if ($table_check === false) {
    echo "Table doesn't exist, let's try to create it!";
    mysqli_query($conn, "CREATE TABLE HUGS_DATA (
      ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      NAME VARCHAR(255) NOT NULL,
      COUNT FLOAT NOT NULL)");
  }
  $name_check = mysqli_query($conn, "SELECT * FROM HUGS_DATA WHERE NAME='$name'");

 if (mysqli_num_rows($name_check) == 0) {
      mysqli_query($conn, "INSERT INTO HUGS_DATA (NAME, COUNT) VALUES ('$name', 1)");
      $addedhug = 1;
} else {
  $hugs_count = mysqli_query($conn, "SELECT COUNT FROM HUGS_DATA WHERE NAME='$name'");
  $result = mysqli_fetch_row($hugs_count)[0];
  $addedhug = $result + 1;
  mysqli_query($conn, "UPDATE HUGS_DATA SET COUNT = $addedhug WHERE NAME='$name'");
}
?>
<h1>You hugged <? echo htmlspecialchars($name); ?></h1>
<p><? echo htmlspecialchars($name); ?> has <? echo $addedhug ?> hugs now!</p>
<p>Here is your HugMe URL: <a href="<? echo $HUG_URL; ?>"><? echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?></a></p>
<p>Hug someone else?</p>
<? include("form.php"); ?>