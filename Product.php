<?php

class Product
{

    public $productArray = array(
        "3DcAM01" => array(
            'id' => '1',
            'name' => 'watch',
            'code' => '3DcAM01',
            'image' => 'product-images/watch.jpg',
            'price' => '1500.00'
        ),
        "USB02" => array(
            'id' => '2',
            'name' => 'laptop',
            'code' => 'USB02',
            'image' => 'product-images/laptop.jpg',
            'price' => '800.00'
        ),
        "wristWear03" => array(
            'id' => '3',
            'name' => 'external-hard-drive',
            'code' => 'wristWear03',
            'image' => 'product-images/external-hard-drive.jpg',
            'price' => '300.00'
        )
    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}
