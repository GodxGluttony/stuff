<form action="ive.php" method="POST">
Unesite ime: <input type="text" name="ime"><br>
Ucenik:<input type="radio" value="ucenik" name="a"><br>
Profesor:<input type="radio" value="prof" name="a"><br>
<input type="submit" value="KLIK" name="x">
</form>
<?php
if(isset($_POST['x']))
{
 $rb=$_POST['a'];
 $ime=$_POST['ime'];
 if($rb=="ucenik")
 {
  $con=mysql_connect("localhost","root","");
  $db=mysql_select_db("skola",$con) or die ("Greska!");
  $upit="SELECT imeu,prezimeu,YEAR(datum_ru) FROM ucenik
                WHERE imeu='$ime';";
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
 if($rb=="prof")
  {
  $con=mysql_connect("localhost","root","");
  $db=mysql_select_db("skola",$con) or die ("Greska!");
  $upit="SELECT p.imep,p.prezimep,pr.naziv FROM profesor p,predmet pr
                WHERE p.jmbgp=pr.jmbgp AND p.imep='$ime';";
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
}
?>