<?php

/**
 * Created by PhpStorm.
 * User: donhat
 * Date: 06/04/2019
 * Time: 14:35
 */
class Home
{
    //thuộc tính class Home
    public $name;
    public $hight;
    public $wight;
    // hàm constructor sẽ có tên trùng với tên của class mà nó được định nghia.
    //Constructor là hàm tự động chạy khi khởi tạo đối tượng(new)
    public function Home($h, $w)
    {
        $this->hight = $h;
        $this->wight = $w;
    }
    // hành động
    public function TinhDienTich()
    {
        return $this->hight * $this->wight;
    }

}