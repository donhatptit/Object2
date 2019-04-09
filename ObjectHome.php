<?php
require ('Home.php');
//Object được tạo ra để gọi constructor
$objHome  = new Home(3, 5);
//in 10 ngôi nhà
    $objHome->name = "Nhà số 1";
    echo "Tên nhà: " . $objHome->name . "<br>";
    echo "Chiều Cao: " . $hight = $objHome->hight . "<br>";
    echo "Chiều rộng: " . $wight = $objHome->wight . "<br>";
    echo "Diện tích: " . $acreage = $objHome->TinhDienTich() . "<br> <hr>";

$objHome  = new Home(5, 6);
//in 10 ngôi nhà
$objHome->name = "Nhà số 2";
echo "Tên nhà: " . $objHome->name . "<br>";
echo "Chiều Cao: " . $hight = $objHome->hight . "<br>";
echo "Chiều rộng: " . $wight = $objHome->wight . "<br>";
echo "Diện tích: " . $acreage = $objHome->TinhDienTich() . "<br> <hr>";

$objHome  = new Home(4, 7);
//in 10 ngôi nhà
$objHome->name = "Nhà số 3";
echo "Tên nhà: " . $objHome->name . "<br>";
echo "Chiều Cao: " . $hight = $objHome->hight . "<br>";
echo "Chiều rộng: " . $wight = $objHome->wight . "<br>";
echo "Diện tích: " . $acreage = $objHome->TinhDienTich() . "<br> <hr>";

$objHome  = new Home(8, 4);
//in 10 ngôi nhà
$objHome->name = "Nhà số 4";
echo "Tên nhà: " . $objHome->name . "<br>";
echo "Chiều Cao: " . $hight = $objHome->hight . "<br>";
echo "Chiều rộng: " . $wight = $objHome->wight . "<br>";
echo "Diện tích: " . $acreage = $objHome->TinhDienTich() . "<br> <hr>";

$objHome  = new Home(3, 6);
//in 10 ngôi nhà
$objHome->name = "Nhà số 5";
echo "Tên nhà: " . $objHome->name . "<br>";
echo "Chiều Cao: " . $hight = $objHome->hight . "<br>";
echo "Chiều rộng: " . $wight = $objHome->wight . "<br>";
echo "Diện tích: " . $acreage = $objHome->TinhDienTich() . "<br> <hr>";

$objHome  = new Home(7, 4);
//in 10 ngôi nhà
$objHome->name = "Nhà số 6";
echo "Tên nhà: " . $objHome->name . "<br>";
echo "Chiều Cao: " . $hight = $objHome->hight . "<br>";
echo "Chiều rộng: " . $wight = $objHome->wight . "<br>";
echo "Diện tích: " . $acreage = $objHome->TinhDienTich() . "<br> <hr>";

