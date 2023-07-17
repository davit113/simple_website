
<?php 
require_once 'config.php';

$class = Config::getPageTPClass(CURRENT_PAGE);
if(!$class){
    echo '$class is empty at tp.php';
    die();
}
?>

<div class="product-list">
    <div class="product-list__top">
        <?php $class::loadProductlist__top(); ?>
    </div>
    <div class="product-list__bottom">
        <?php $class::loadProductlist__bottom(); ?>
    </div>
</div>