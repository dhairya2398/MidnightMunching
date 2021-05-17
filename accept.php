<?php
$id=$_GET['order'];
echo $id;
$con = mysql_connect("localhost","jjm","123");
mysql_select_db("grp13", $con);
$sql="DELETE from grp13.order WHERE id  = $id";
mysql_query($sql,$con);
header("Location: view_orders.php");
?>
