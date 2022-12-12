<form action="mmbrale.php" method="POST">
Unesite prvi broj <input type="text" name="a"><br>
Unesite drugi broj <input type="text" name="b"><br>
Unesite treci broj <input type="text" name="c"><br>
Manji <input type="radio" value="manji" name="u" checked><br>
Veci <input type="radio" value="veci" name="u"><br>
<input type="submit" value="KLIK" name="klik">
</form>
<?php
if(isset($_POST['klik'])) 
{
 $ID=$_POST['u'];
 if($ID=="veci")
 {
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  echo "<table border=1>";
  echo "<tr>";
  if(($a>$b)&&($a>$c)) echo "<td>$a</td>";
  else if (($b>$a)&&($b>$c)) echo "<td>$b</td>";
  else echo "<td>$c</td>";
  echo "</tr>";
  echo "</table>";
 }
  if($ID=="manji")
 {
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  echo "<table border=1>";
  echo "<tr>";
  if(($a<$b)&&($a<$c)) echo "<td>$a</td>";
  else if (($b<$a)&&($b<$c)) echo "<td>$b</td>";
  else echo "<td>$c</td>";
  echo "</tr>";
  echo "</table>";
 }
}
