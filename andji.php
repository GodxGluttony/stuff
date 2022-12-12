<form action="andji.php" method="POST">
Mladji od 50:<input type="radio" name="x" value="mp" checked><br>
Stariji od 50:<input type="radio" name="x" value="sp"><br>
<input type="submit" name="klik" value="KLIK">
</form>
<?php
if(isset($_POST['klik']))
{
  session_start();
  $_SESSION['god']=$_POST['x'];
  header("Location: aandji.php");
}
?>