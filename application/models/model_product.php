<?php

/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 2/11/2020
 * Time: 1:53 PM
 */
Class Model_Product extends Model
{
    public $id = [
        'value' => null,
        'manualInput' => false
    ];
    public $title = [
        'value' => null,
        'validation' => [
            'type' => 'string',
            'maxLength' => 255
        ],
        'form' => 'input',
        'manualInput' => true,
    ];
    public $price = [
        'value' => null,
        'validation' => [
            'type' => 'numeric',
            'maxLength' => 11
        ],
        'form' => 'input',
        'manualInput' => true,
    ];
    public $isset = [
        'value' => null,
        'validation' => [
            'type' => 'int',
            'maxLength' => 1
        ],
        'form' => 'checkbox',
        'manualInput' => true
    ];

    public function map($product_data){
        $this->id['value'] = $product_data['id'];
        $this->title['value'] = $product_data['title'];
        $this->price['value'] = $product_data['price'];
        $this->isset['value'] = $product_data['isset'];
    }
}




