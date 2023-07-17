<?php
require_once '../productClasses.php';
(function(){
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        
        $var = array(3,4);
        // Product::add
        header("Location: ../../index.php");
    } else {
        header("Location: ../../index.php");
    }

})();


// if ($_SERVER["REQUEST_METHOD"] === "POST"){
    
//     $pdo = DB::connectDB();
//     try{
//         // $query ="INSERT INTO book (price_, weight_) VALUES (?,?);";
//         // $stmt = $pdo->prepare($query);
//         // $stmt->execute([99, 50]);
//         $query ="INSERT INTO book (price_, weight_) VALUES (:price_,:weight_);";
//         $stmt = $pdo->prepare($query);
//         $stmt->bindParam(':price_', $val);
//         $stmt->bindParam(':weight_', $va2);
//         $stmt->execute();
//         header("Location: ../index.php");
//         exit();
//     } catch(PDOException $e){
//         die("connection failed: " . $e->getMessage());
//     }
// } else {
//     header("Location: ../index.php");
// }

// // $dsn  = "mysql:host=localhost;dbname=ScandiwebDB";
// // $dbusername = "root";
// // $dbpassword = "";

// // try{
// //     $pdo = new PDO($dsn, $dbusername, $dbpassword);
// //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// // } catch(PDOException $e){
// //     echo "connection failed: " . $e->getMessage();
// // }