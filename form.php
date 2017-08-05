<?
if ($CLEAN_URL === true) {
  if (preg_match('/hugme/i',$_SERVER["REQUEST_URI"])) {
      $url_start = '../';
  } else {
      $url_start = './';
      }
?>
<form onsubmit="location.href='<? echo $url_start ?>hugme/' + document.getElementById('myInput').value; return false;">
<? } else { ?>
<form onsubmit="location.href='./index.php?hug=' + document.getElementById('myInput').value; return false;">
<? } ?>
<input type="text" id="myInput">
  <input type="submit">
</form>