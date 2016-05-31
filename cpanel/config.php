<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($page)
{
    case 'books':
    	if($action=='add') {
    		$page_to_load = "includes/AddBooks.inc.php";
    	}
    	else if($action == 'view') {
    		$page_to_load = "includes/ViewBooks.inc.php";
    	}
    	else{
        	$page_to_load = "includes/Books.inc.php";
    	}
    break;

    default:
        $page_to_load= "includes/dashboard.inc.php";

}



?>