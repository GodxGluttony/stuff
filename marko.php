<?php
     setcookie("imeu","",time()-60);
?>
<form action="marko.php" method="POST">
<select name="ime">
<option value="">Izaberite ime ucenika</option>
<?php
     $konekcija=mysql_connect("localhost","root","");
     $baza=mysql_select_db("skola",$konekcija) OR DIE ("Greska!!!");
     $upit="SELECT DISTINCT imeu FROM ucenik ORDER BY imeu";
     $rez=mysql_query($upit);
     while($red=mysql_fetch_array($rez))
     {
        echo "<option value=$red[0]>$red[0]</option>";
     }
?>
</select><br>
<input type="submit" name="klik" value="KLIK">
<?php
     if(isset($_POST['klik']))
     {
        if(!empty($_POST['ime']))
        {
           $ime=$_POST['ime'];
           setcookie("ime",$ime,time()+60);
           header("Location: markoo.php");//ide na drugi php,sl slika
        }
        else echo "izabeite ucenika!!!";
     }
?>
</form>
