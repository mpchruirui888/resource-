<?php
/**
 * Created by PhpStorm.
 * User: lrving
 * Date: 2019/7/30
 * Time: 9:24
 */

/**接口中的方法没方法体   在实现类方法中写方法体
 *
 * Interface InterFaces
 */

interface InterFaces
{
    //接口中常量
    const ADMIN_NAME = '你好';
    //接口中的方法
    function token();
}
interface TEST1{
//    接口中的方法
        function test1();
}
interface TEST2{
//    接口中的方法
    function test2();
}

//接口的继承  一个接口也可继承多个接口
interface TEST3 extends TEST1,TEST2{
    function test3();
}


//实现接口 一个类可以实现多个接口
 class inter implements InterFaces
 {
     public $name = "23654897";
//        实现接口中的token方法
     public function token()
     {
         return $this->name;
     }
}


$rui = new inter();
echo $rui->token();