<?php
$arr = [
    'key'=>'value_2',
    'key1'=>'value_3',
    'key2'=>'value_2',
    'key3'=>'value_3',
    'key4'=>'value_2',
    'key5'=>[
        'php'=>"Lap trinh PHP",
        'html'=>'Lap trinh HTML'
    ],
    'key6'=>[
        'key61'=>[
            'css'=>'CSS'
        ],
        [
            "Javascript"
        ]
    ]
];
echo "<pre>";
print_r($arr);
echo "</pre>";
// $subject = $arr['key5'];
// echo $subject['html']

//echo $arr['key5']['html'];

//echo $arr['key6']['key61']['css']
echo $arr['key6'][0][0];

$arr2 = [
    'value',
    'value1',

];

// for($i=0;$i<count($arr2); $i++){
//     echo $arr2[$i];
//     echo "<br>";
// }

// foreach($arr as $key=>$value){
//     echo $key;
//     echo "<br>";
// }



$arrSanpham = [
    [
        'name'=>' iPhone 6 32GB',
        'price'=>8450000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>'iPhone 8 Plus 256GB',
        'price'=>29450000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb2-400x460-1-400x460.png'
    ],
    [
        'name'=>' iPhone X 256GB',
        'price'=>33450000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-h2-400x460.png'
    ],
    [
        'name'=>' Samsung Galaxy S8 Plus',
        'price'=>18450000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/91131/samsung-galaxy-s8-plus-tim-2-400x460.png'
    ],
    [
        'name'=>' iPhone 6 32GB',
        'price'=>8450000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>'Sony Xperia XZ Premium Pink Gold',
        'price'=>18450000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/113126/sony-xperia-xz-premium-pink-gold-400x460.png'
    ],
    [
        'name'=>' iPhone 6 32GB',
        'price'=>8450000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>' iPhone 6 32GB',
        'price'=>2350000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>' iPhone 6 32GB',
        'price'=>8490000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>' iPhone 6 32GB',
        'price'=>12450000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
];

print_r($arrSanpham);

?>