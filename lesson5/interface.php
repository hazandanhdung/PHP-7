<?php 
interface IProduct extends IP {
    const NAME = 'gaegaewg';
    const PRICE = 400;
    public function getAll($n); // Abstract method
    public function getOne(); // Abstract method
}

// 1. PHai khai bao lai toan bo method cua interface
// 2. Khong the khoi tao doi tuong
// 3. chi co hang (const), khong co bien(property)
// 4. chi duoc khai bao public, ko co private/protected 
// 5. co the implement nhieu interface
// 6. co the khai bao static method trong interface
// 7. khong co tu khoa abstract trong interface

interface IP {
    public function get();
    public static function getSome();
}