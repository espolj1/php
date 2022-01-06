
<?php
    define('__APP__', TRUE);
	session_start();
	unset($_SESSION['news_title_1']);
	unset($_SESSION['news_title_2']);
	unset($_SESSION['news_title_3']);
	unset($_SESSION['news_1']);
	unset($_SESSION['news_2']);
	unset($_SESSION['news_3']);
	
	header("Location: index.php");
	exit;