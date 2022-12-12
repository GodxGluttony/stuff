<form method="POST" action="neger.php">
<select name="neger">
<option value=""></option>
<?php
     $con=mysql_connect("localhost","root","");
     $db=mysql_select_db("skola",$con) OR DIE ("GRESKA!!!");
     $upit="SELECT sifpred,naziv FROM predmet";
     $rez=mysql_query($upit);
     while($red=mysql_fetch_array($rez))
     {
       echo "<option value=$red[0]>$red[1]</option>";
     }

?>
</select><br>
<input type="submit" value="KLIK" name="x">
</form>
<?php
if(isset($_POST['x']))
{
  if(!empty($_POST['predmet']))
  {
    $pr=$_POST['predmet'];
    $upit="SELECT p.imep,p.prezimep FROM profesor p, predmet pred 
                  WHERE p.jmbgp=pred.jmbgp AND pred.sifpred='$pr'";
    $rez=mysql_query($upit);
    echo "<table border=1>";
    while($red=mysql_fetch_array($rez))
    {
      echo "<tr>
                <td>$red[0]</td>
                <td>$red[1]</td>
           </tr>";
    }
    echo "</table>";
  }
  else echo "selektuj predmet!!!";
}


?>