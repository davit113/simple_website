<?php
require_once '../productClasses.php';

(function(){
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        
        $var = array(3,4);
        Product::deleteSelectedById($var);
        header("Location: ../../index.php");
    } else {
        header("Location: ../../index.php");
    }
})();