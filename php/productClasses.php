<?php
// require_once  $_SERVER["DOCUMENT_ROOT"] ;
require_once 'common.php';

class Product{
    private $id;
    private $sku_;
    private $name_;
    private $price_;

    public function selfDis(){}

    private static function getAllProduct(){
        $pdo =DB::connectDB();

        $sql = 'SELECT * FROM product';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        // $statements->setFetchMode(PDO::FETCH_CLASS, 'Product');
        // $book = $statement->fetchAll();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Product');

        return array();
    }
    public static function tmp_DB_test(){
        $pdo = DB::connectDB();

        $sql = 'SELECT id FROM product';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $products = $stmt->fetchAll();

        // foreach ($products as $product) {
        //     if (isset($product->book_weight_)) {
        //         $product = new Book($product);
        //     } elseif (isset($product->dvd_size_)) {
        //         $product = new DVD($product);
        //     } elseif (isset($product->width_)) {
        //         $product = new Furniture($product);
        //     } else {
        //         // Handle unknown product type or error
        //         continue;
        //     }
        // }

        return $products;
    }

    public static function displayAllProduct(){
        $arr = self::getAllProduct();
        $id =  3;
        for($i =0; $i<10; $i++){
            echo      '<div class="item">'
                    . '<input form ="formdel" value="' . $id . '" type="checkbox" name="product" id="' . $id . '"> '
                    . '<div class="item__wraper">'
                    . '<div>' . ':-SKU-' . '</div>'
                    . '<div>' . ':name-' . '</div>'
                    . '<div>' . ':price-' . '</div>'
                    . '<div>' . ':selfDiscription-' . '</div>'
                    . '</div>'
                    . '</div>';

            ++$id;
        }

        // foreach($arr as $val){
        //     $id =0;
        //     echo      '<div class="item">'
        //             . '<input form ="formdel" value="' . $id . '" type="checkbox" name="product" id="' . $id . '"> '
        //             . '<div class="item__wraper">'
        //             . '<div>' . $val->sku . '</div>'
        //             . '<div>' . $val->name . '</div>'
        //             . '<div>' . $val->price . '</div>'
        //             . '<p>' . $val->selfDis() . '</p>'
        //             . '</div>'
        //             . '</div>';
        // }
    }
    public static function tmpSQLTest(){
        $pdo =DB::connectDB();

        $sql = 'SELECT *
                FROM product';
                // -- WHERE book_id = :book_id
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        // $statements->setFetchMode(PDO::FETCH_CLASS, 'Product');
        // $book = $statement->fetchAll();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Product');
        foreach($result as $var){
            echo '<br>';
            var_dump($var);
        }
        echo '<br>------------------------------------<br>';
        foreach($result as $pr){
            $pr->print();
        }
    }
    public function print(){
        echo 'id: '.$this->id.'<br>';
        echo 'sku: '.$this->sku_.'<br>';
        echo 'name: '.$this->name_.'<br>';
        echo 'price: '.$this->price_.'<br>';
        echo '---------------------------<br>';
    }
    public static function deleteSelectedById($val){        
        $pdo =DB::connectDB();

        if(!is_array($val)){
                $id =$val;
                $query = "DELETE FROM product WHERE id = :id";
                $stmt =$pdo->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
        }else{
            foreach($val as $id){
                $query = "DELETE FROM product WHERE id = :id";
                $stmt =$pdo->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            }
        }
    }
}

class DVD extends Product{
    private $size;
    // public function __construct($sku, $name, $price, $size) {
    //     parent::__construct($sku, $name, $price);
    //     $this->size = $size;
    // }
    public function getSize(){
        return $this->size;
    }
    public function selfDis(){
        echo "size: $this->size MB";
    }
}
class Book extends Product{
    private $weight;
    // public function __construct($sku, $name, $price, $weight) {
    //     parent::__construct($sku, $name, $price);
    //     $this->weight = $weight;
    // }
    public function getWeight(){
        return $this->weight;
    }
    public function selfDis(){
        echo "weight: $this->weight KG";
    }
}
class Disk extends Product{
    private $width;
    private $length;
    private $height;
    
    // public function __construct($sku, $name, $price, $width, $length, $height) {
    //     parent::__construct($sku, $name, $price);
    //     $this->width = $width;
    //     $this->length = $length;
    //     $this->height= $height;
    // }
    public function getWidth(){
        return $this->width;
    }
    public function getLength(){
        return $this->length;
    }    
    public function getHeight(){
        return $this->height;
    }
    public function selfDis(){
        echo "Dimensions: $this->width x$this->length x$this->height MB";
    }
}

?>


