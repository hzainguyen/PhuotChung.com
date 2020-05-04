<?php
require 'public/include/header.php';

if(isset($_GET['page'])){
	require 'app/view/' . $_GET['page'] . '.php';
}else{
	require 'app/view/home.php';
}

require 'public/include/footer.php';
?>