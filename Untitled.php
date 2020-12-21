<?php
// Generate the expected result: 
$array = array(
    array(
        'id' => 456,
        'title' => 'Test Product',
        'description' => 'Lorem Ipsum',
        'category' => 'Cat A -> Cat B -> Cat C',
        'stock' => 'In Stock',
        'url' => 'www.example.com',
        'price' => '10$',
    ),
    array(
        'url' => 'www.example.com',
        'price' => '20$',
        'id' => 452,
        'title' => 'Test Product2',
        'description' => 'Lorem Ipsum',
        'category' => 'Cat A -> Cat B -> Cat C',
        'stock' => 'In Stock',
    )
);

$expected_array = array();

foreach($array as $arr){
    $expected_array[] = array(
        'id' => $arr['id'],
        'title' => $arr['title'],
        'description' => $arr['description'],
        'custom_label' => $arr['category'] .' | '. $arr['stock'] .' | '. $arr['url'] .' | '. $arr['price'],
    );
}

print_r($expected_array);

// Structure of custom_label = category | stock | url | price