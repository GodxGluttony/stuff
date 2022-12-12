<form action="niga.php" method="POST">
Unesite br: <input type="text" name="broj">
<input type="submit" value="KLIK">
</form>
<?php
if(is_numeric($_POST['broj']))
{
$a=$_POST['broj'];
for($i=1;$i<=$a;$i++)
    if ($i%2==0)echo "$i<br>";
}
else echo "Greska!";
?>