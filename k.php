<?php
$con=mysql_connect("localhost", "root", "");
$db=mysql_select_db("skola", $con) or die("GREŠKA");
$upit="SELECT jmbgu, imeu, prezimeu, razred FROM ucenik WHERE razred=3";
$rez=mysql_query($upit);
echo"<table border=1>";
while($red=mysql_fetch_array($rez))
{
  echo "<tr>";
  echo "<td>$red[0]</td>";
  echo  "<td>$red[1]</td>";
   echo  "<td>$red[2]</td>";
    echo  "<td>$red[3]</td>";
    echo"</tr>";

}
echo"</table>"
?>
