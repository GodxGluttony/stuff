<form action="darkoo.php" method="POST">
<select name="razred">
<option value="">Izaberite razred</option>
<?php
      $con=mysqcl_connect("localhost","root","");
      $db=mysql_select_db("skola",$con) OR DIE ("Greska!!!");
      $upit="SELECT DISTINCT razred FROM ucenik ORDER BY razred";
      $rez=mysql_query($upit);
      while($red=mysql_fetch_array($rez))
      {
         echo "<option value=$red[0]>$red[0]</option>";
      }
?>
</select><br>
<input type="submit" name="klik" value="KLIK">
</form>
<?php
     if(isset($_POST['klik']))
     {
         $ime=$_COOKIE('imeu');
         if(isset($ime))
         {
            if(!empty($_POST['razred']))
            {
               $raz=$_POST['razred'];
               $upit="SELECT o.datumo, u.imeu FROM ucenik u,ocjene o";
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
            else echo "izaberite razred!!!";
         }
         else header ("Location: darko.php");
     }
?>