<?
if ($CLEAN_URL === true) {
?>
<form onsubmit="location.href='<? echo $url_start ?>hugme/' + document.getElementById('myInput').value; return false;">
<? } else { ?>
<form onsubmit="location.href='index.php?hug=' + document.getElementById('myInput').value; return false;">
<? } ?>
<input type="text" id="myInput">
  <input type="submit">
</form>