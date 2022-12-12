<form action="neegus.php" method="POST">
<select name="r">
<option value="1">I</option>
<option value="2">II</option>
<option value="3">III</option>
<option value="4">IV</option>
</select>

<br>

<input type="submit" value="KLIK" name="x">

<?php
if(isset($_POST['x']))
{
 $razred=$_POST['r'];
 $con=mysql_connect('localhost','root','');
 $db=mysql_select_db("skola",$con) or die ("Greska");
 $upit="SELECT imeu,prezimeu,odjeljenje FROM ucenik 
               WHERE razred='$razred'";
 $rez=mysql_query($upit);
 echo "<table border=1>";
 while ($red=mysql_fetch_array($rez))
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

</form>