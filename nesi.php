<form action="nesi.php" method="POST">
<select name="predmet">
<option value=""></option>
<?php
  $con=mysql_connect("localhost","root","");
  $db=mysql_select_db("skola",$con) OR DIE ("Greska!");
  $upit="SELECT sifpred,naziv FROM predmet";
  $rez=mysql_query($upit);
  while($red=mysql_fetch_array($rez))
  {
    echo "<option value=$red[0]>$red[1]</option>";

  }
?>
</select></br>
<input type="submit" name="x" value="KLIK">
</form>
<?php
if(isset($_POST['x']))
{
  if(!empty($_POST['"']))
  {
    $pr=$_POST['predmet'];
    $upit="SELECT p.jmbgp,p.imep,p.prezimep FROM profesor p,predmet pred
           WHERE p.jmbgp=pred.jmbgp AND pred.sifpred='$pr'";
    $rez=mysql_query($upit);
    ?>
    <form action="nesi.php" method="POST">
    <?php
    echo "<table border=1>";
    while($red=mysql+fetch_array($rez))
    {
      echo "<tr>
           <td>$red[1]</td>
           <td>$red[2]</td>
           <td><input type=radio name=prof value=$red[0]></td>
           </tr>";
    }
    echo "</table>";
  }
  else echo "Greska!";
}
?>