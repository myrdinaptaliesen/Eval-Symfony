<?php
// tests/Form/ProductsFormTest.php
namespace App\Tests\Form;

use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;



class ProductsFormTest extends KernelTestCase{
    
    public function testNewCategory(){
        $products=(new Products())
        ->setNameProduct('77')
        ->setDescriptionProduct('77')
        ->setPriceProduct('77')
        ->setStockProduct('77');
        
        self::bootKernel();
        $error = self::$container->get('validator')->validate($products);
        $this->assertCount(0,$error);
    }
}