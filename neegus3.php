<?php
{
  $con=mysql_connect('localhost','root','');
  $db=mysql_select_db("skola",$con) or die("GRESKA");
  $upit="SELECT imeu,razred,odjeljenje FROM ucenik
                WHERE imeu LIKE 'A%' OR imeu LIKE 'E%' OR imeu LIKE 'I%' OR imeu LIKE 'O%' OR imeu LIKE 'U%'
                ORDER BY imeu ASC";
  $rez=mysql_query($upit);
<form action="neegus3.php" method="POST">
}
?>