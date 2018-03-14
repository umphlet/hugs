<?php
if ($CLEAN_URL === true) {
?>
<form onsubmit="location.href='<?php echo $url_start ?>hugme/' + document.getElementById('myInput').value; return false;">
<?php } else { ?>
<form onsubmit="location.href='index.php?hug=' + document.getElementById('myInput').value; return false;">
<?php } ?>
<input type="text" id="myInput">
  <input type="submit">
</form>