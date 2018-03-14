<ul>
<?php
$query = "SELECT * FROM HUGS_DATA";
if (mysqli_multi_query($conn, $query)) {
  do {
    if ($result = mysqli_use_result($conn)) {
      while ($row = mysqli_fetch_row($result)) {
?>
<li><?php echo $row[1]; ?> has <?php echo $row[2]; ?> hug<?php if ($row[2] != 1) {echo "s";}?>!</li>
<?php
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