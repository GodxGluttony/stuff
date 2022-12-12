<form action="nega.php" method="POST">
<select name="razred">
<option value=""></option>
<option value="1">I</option>
<option value="2">II</option>
<option value="3">III</option>
<option value="4">IV</option>
</select><br>
<input type="submit" name="x" value="KLIK">
</form>
<?php
if(isset($_POST['x']))
{
  if(!empty($_POST['razred']))
  {
    $raz=$_POST['razred'];
    $konekcija=mysql_connect("localhost","root","");
    $db=mysql_select_db("skola",$konekcija) OR DIE ("Greska!!!");
    $upit="SELECT imeu,prezimeu,odjeljenje FROM ucenik
                  WHERE razred='$raz'
                  ORDER BY imeu";
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
  else echo "Selektuj nesto!!!";

}
?>