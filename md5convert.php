<?php
$PlainText = ($_POST["plaintext"]);
$md5 = md5($PlainText);
echo $md5;
echo "<a href='./md5.html'><p>GO BACK</p></a>";

?>