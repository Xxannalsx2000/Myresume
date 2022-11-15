<?php
require('../connection/connection.php');
$sql = "DELETE FROM reservation WHERE reservation_orderID =".$_GET['gmemberID'];
$sth = $db->prepare($sql);
$sth -> execute();
header('Location: member_only_order.php');
?>