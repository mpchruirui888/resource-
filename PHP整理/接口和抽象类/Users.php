<?php
header("Content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: lrving
 * Date: 2019/7/30
 * Time: 8:29
 */

/** 抽象类操作，和接口的操作 不同点
（1）抽象类可以有构造方法，接口中不能有构造方法。

（2）抽象类中可以有普通成员变量，接口中没有普通成员变量

（3）抽象类中可以包含静态方法，接口中不能包含静态方法

（4） 一个类可以实现多个接口，但只能继承一个抽象类。

（5）接口可以被多重实现，抽象类只能被单一继承

（6）如果抽象类实现接口，则可以把接口中方法映射到抽象类中作为抽象方法而不必实现，而在抽象类的子类中实现接口中方法
 *
 *  抽象类和接口相同点
 *
(1) 都可以被继承

(2) 都不能被实例化

(3) 都可以包含方法声明

(4) 派生类必须实现未实现的方法

 * Class Users
 */
abstract class Users
{
    protected  $name = "奥巴马";


//    抽象类不能直接实例化，但是可以有构造方法
    public function __construct()
    {
        return '抽象类构造器，实例化时自动调用<br>';
    }
    //抽象方法
    abstract public function say();

}

//抽象类继承  一个普通类只能继承一个抽象类

class  Ali extends Users
{
    public  $name = "新平";
    public function say()
    {
        return $this->name;
    }

    public function __construct()
    {
        return parent::__construct();
    }
}

$ali = new Ali();
echo $ali->say();






