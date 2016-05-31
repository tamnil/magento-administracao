//inicia sessao no magento e carrega uma collection


<?php
require_once('app/Mage.php'); 
umask(0);
Mage::app('admin'); 
$productCollection = Mage::getModel('catalog/product')
           ->getCollection();
           
           foreach($productCollection as $_product)
{
    $productID = $_product->getId();

    try {
        Mage::getModel("catalog/product")->load($productID)->delete(); // this will delete product
    } catch (Exception $exception){
        var_dump($exception);
        die('Exception Thrown');
    }
