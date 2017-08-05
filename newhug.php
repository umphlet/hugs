<h1>You hugged <? echo htmlspecialchars($name); ?></h1>
<p><? echo htmlspecialchars($name); ?> has 1000 hugs now!</p>
<p>Here is your HugMe URL: <a href="<? echo $HUG_URL; ?>"><? echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?></a></p>
<p>Hug someone else?</p>
<? include("form.php"); ?>