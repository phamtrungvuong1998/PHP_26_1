<?php
// class Foo
// {
//     public function __construct()
//     {
//         echo 'Class Foo được khởi tạo';
//     }
// }

// new Foo();

// class Bar
// {
//     public function __construct()
//     {
//         echo 'Class Bar được khởi tạo';
//     }
// }

// class Foo extends Bar
// {
//     public function __construct()
//     {
//         echo 'Class Foo được khởi tạo';
//     }
// }

// $foo = new Foo();

class Bar
{
    public function __construct()
    {
        echo 'Class Bar được khởi tạo';
    }
}

class Foo extends Bar
{
    public function __construct()
    {
        //gọi phương thức khởi tạo của class cha
        parent::__construct();
        echo 'Class Foo được khởi tạo';
    }
}

$foo = new Foo();
?>