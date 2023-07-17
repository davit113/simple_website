
<?php 
require_once "includes/dbh.inc.php";

// require_once "index.html";
(function(){
    $dsn  = "mysql:host=localhost;dbname=ScandiwebDB";
    $dbusername = "root";
    $dbpassword = "";
    try{
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "connection failed: " . $e->getMessage();
    }
    $query = "SELECT * FROM product INNER JOIN book ON product.id = book.product_id";
    $stmt =$pdo->prepare($query);
    
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    PDO::FETCH
    $pdo =NULL;
    $stmt =NULL;


    
    
    
    if(empty($result)){
        echo "result is empty";
    }
    // TP::initIndex($result);
});

require 'includes/config.php';
require 'includes/functions.php';

// init();





require_once 'common.php';

i have this 4 classes:

class Product{
    private $id;
    private $sku_;
    private $name_;
    private $price_;

    private static function getAllProduct(){
        DB::connectDB();
        $pdo =DB::connectDB();

        $sql = 'SELECT * FROM product';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Product');

        return array();
    }
}

class DVD extends Product{
    private $size_;
}
class Book extends Product{
    private $weight;
}
class furniture extends Product{
    private $width_;

}


and i have this 4 table:
CREATE TABLE product(
    id INT(11) NOT NULL  AUTO_INCREMENT,
    sku_ varchar(255) NOT NULL,
    name_ varchar(255) NOT NULL,
    price_ float NOT NULL,
    created_at_ DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY(id)
);
CREATE TABLE book(
    id INT(11) NOT NULL  AUTO_INCREMENT,
    book_weight_ int(11) NOT NULL,
    product_id INT(11) NOT NULL;
    PRIMARY KEY(id),
    CONSTRAINT FOREIGN KEY (product_id) REFERENCES Book(BookID) ON DELETE CASCADE
);
CREATE TABLE dvd(
    id INT(11) NOT NULL  AUTO_INCREMENT,
    dvd_size_ INT(11) NOT NULL,
    product_id INT(11) NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT FOREIGN KEY (product_id) REFERENCES Book(BookID) ON DELETE CASCADE
);
CREATE TABLE furniture(
    id INT(11) NOT NULL  AUTO_INCREMENT, 
    width_ INT(11) NOT NULL,
    product_id INT(11) NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT FOREIGN KEY (product_id) REFERENCES Book(BookID) ON DELETE CASCADE
);


each product only have exactly 1 'child' colum (book dvd of furniture);

my tast is to grab all colums of database and create  and create  respective Class instances (DVD or book or furniture) how can i do that?
?>



