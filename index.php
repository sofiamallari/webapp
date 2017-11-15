<?php
if($_SESSION['status'] == 2){
	header('location: admin/admin.php');
}
else{
	header('location: connect/index.php');
}