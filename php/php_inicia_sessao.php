//inicia sessao no magento e carrega uma collection

<?php

require 'app/Mage.php';
Mage::app();

$products = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');
foreach ($products as $product) {

// ......


}
