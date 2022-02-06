<?php


namespace App\classes;


class Product
{

    protected $product;

    /**
     * @return mixed
     */
    public function getAllProduct()
    {
        return [
            0 => [
                'id' => '1',
                'title' => 'FORMAL SHIRTS FOR MEN',
                'Description' => '',
                'price' => '200$',
                'category' => 'Men Fashion',
                'Brand' => 'Gucci',
                'img' => 'shirt.png'
            ],

            1 => [
                'id' => '2',
                'title' => 'Long Sleeve Formal Shirt for',
                'Description' => 'Product1 Description',
                'price' => '200$',
                'category' => 'Men fashion',
                'Brand' => 'Gucci',
                'img' => 'shirt1.jpg'
            ],
            2 => [
                'id' => '3',
                'title' => 'Product 3',
                'Description' => 'Product1 Description',
                'price' => '200$',
                'category' => 'Shirt',
                'Brand' => 'Gucci',
                'img' => 'shirt3.png'
            ],
            3 => [
                'id' => '4',
                'title' => 'Product 4',
                'Description' => 'Product1 Description',
                'price' => '200$',
                'category' => 'Shirt',
                'Brand' => 'Gucci',
                'img' => ''
            ],
            4 => [
                'id' => '5',
                'title' => 'Product 5',
                'Description' => 'Product1 Description',
                'price' => '200$',
                'category' => 'Shirt',
                'Brand' => 'Gucci',
                'img' => ''
            ],

        ];
    }

    public function getSingleProduct(){

    }




}