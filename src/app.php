<?php 
if (isset($_GET['view'])) {
    # code...
    $view =$_GET['view'];
    require "src/{$view}.php";
}else{
    require "src/page1.php";
}
?>