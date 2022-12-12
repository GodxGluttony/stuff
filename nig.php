<form action="nig.php" method="POST">
Unesite ime: <input type="text" name="a"><br>
<input type="submit" name="x" value="KLIK">
</form>
<?php
if(isset($_POST['x']))
{
  $a=$_POST['a'];
  $con=mysql_connect("localhost","root","");
  $db=mysql_select_db("skola",$con) or die ("GRESKA!");
  $upit="SELECT imeu,prezimeu,YEAR(datum_ru) 
                FROM ucenik WHERE imeu='$a';";
  $rez=mysql_query($upit);
  echo "<table border=1>";
  while($red=mysql_fetch_array($rez))
  {
   echo "<tr>";
   echo "<td>$red[0]</td>";
   echo "<td>$red[1]</td>";
   echo "<td>$red[2]</td>";
   echo "</tr>";
  }
  echo "</table>";
}
?>