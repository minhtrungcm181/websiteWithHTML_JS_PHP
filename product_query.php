<?php
include('connectdb.php');
$counter = 0; 
$query = "SELECT COUNT(id) FROM products";
$result = mysqli_query($con, $query);
$counter = mysqli_num_rows($result);
$maxpage =  (int) ($counter/6) + 1;
$firstpage = 1;
$currentpage = 1;
$limit = 6;
if (!isset ($_GET['pagination']) ) {

    $currentpage = 1;
    
    } else {
        if($_GET['pagination'] == 'previous'){
            $currentpage--;
            if ($currentpage == 0) {$currentpage = 1;}
        } elseif ($_GET['pagination'] == 'next') {
            $currentpage++;
            if ($currentpage > $maxpage) {$currentpage = $maxpage;}
        }
        
    else {
    $currentpage = $_GET['pagination'];}
    
    }


    $start = ($currentpage-1)*$limit;

    $result = mysqli_query($con, "SELECT * FROM products LIMIT $start, $limit");

    
   

?>