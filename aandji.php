<form action="aandji.php" method="POST">
<select name="predmet">
<option value="">Izaberite predmet</option>
<?php
   $konekcija=mysql_connect("localhost","root","");
   $baza=mysql_select_db("skola",$konekcija) OR DIE ("Greska!!!");
   $upit="SELECT DISTINCT naziv FROM predmet";
   $rez=mysql_query($upit);
   while($red=mysql_fetch_array($rez))
   {
     echo "<option value=$red[0]>$red[0]</option>";
   }

?>
</select><br>
<input type="submit" value="klik" name="KLIK">
</form>
<?php
if(isset($_POST['klik']))
{
   session_start();
   $god=$_SESSION['god'];
   if(!empty($_POST['predmet']))
   {
     $predmet=$_POST['predmet'];
     if($god=='mp')
     {
       $upit="SELECT p.imep,p.prezimep,p.datum_rp FROM profesor p, predmet pred 
                     WHERE p.jmbgp=pred.jmbgp AND pred.naziv='$predmet' YEAR(datum_rp)>=1972";
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
     else if($god=='sp')
     {
       $upit="SELECT p.imep,p.prezimep,p.datum_rp FROM profesor p, predmet pred 
                     WHERE p.jmbgp=pred.jmbgp AND pred.naziv='$predmet' YEAR(datum_rp)<1972";
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
   }
   else echo "<script>alert('Izaberite predmet')</script>";
}
?>