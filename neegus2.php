<form action="neegus2.php" method="POST">

<select name="r">

</select>

Unesite ime:<input type="text" name="ime"><br>
<input type="submit" value="KLIK" name="x">
</form>
<?php
if(isset($_POST['x']))
{
  $ime=$_POST['ime'];
  $con=mysql_connect('localhost','root','');
  $db=mysql_select_db("skola",$con) or die("GRESKA");
  $upit="SELECT imeu,razred,odjeljenje FROM ucenik
                WHERE imeu LIKE 'A%' OR imeu LIKE 'E%' OR imeu LIKE 'I%' OR imeu LIKE 'O%' OR imeu LIKE 'U%'
                ORDER BY imeu ASC";
  $rez=mysql_query($upit);
  echo "<table border=1>";
  while($red=mysql_fetch_array($rez))
  {
    echo "<tr>
              <td>$red[0]</td>
              <td>$red[1]</td>
              <td>$red[2]</td>
         </tr>";
  }
  echo "</table>";
}
?>