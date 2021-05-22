<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];

<style>
echo{
	font-size: 30px;
}
</style>
	
    mysql_connect("localhost", "root", "");
    mysql_select_db ("Strangers");
    $query = "SELECT * FROM mnnit WHERE name='$a' AND password='$b'";
    $result= mysql_query($query);
	echo"Thanks for choosing Farmeasy"

?>
