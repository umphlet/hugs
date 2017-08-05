<ul>
<?
$query = "SELECT * FROM HUGS_DATA";
if (mysqli_multi_query($conn, $query)) {
  do {
    if ($result = mysqli_use_result($conn)) {
      while ($row = mysqli_fetch_row($result)) {
?>
<li><? echo $row[1]; ?> has <? echo $row[2]; ?> hug<? if ($row[2] != 1) {echo "s";}?>!</li>
<?
      }
      mysqli_free_result($result);
    }
    if (mysqli_more_results($conn)) {
      echo "-----------------------------\n";
    }
  } while (mysqli_next_result($conn));
}
?>
</ul>