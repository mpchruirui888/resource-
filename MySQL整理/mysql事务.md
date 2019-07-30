## Mysql事务

#### php使用mysql事务()

```php

<?php

try{
    $dsn='mysql:host=localhost;dbname=mydb';//定义数据源:连接的数据库地址,数据库名称
    $username='root';//数据库用户名
    $passwd='rui123456';//数据库密码
    $pdo = new PDO($dsn,$username,$passwd);//创建pdo对象
    var_dump($pdo);
}catch(PDOException $e){
    echo $e->getMessage();
}
    ?>
```

![1564128043087](C:\Users\lrving\AppData\Roaming\Typora\typora-user-images\1564128043087.png)





  #### 悲观锁







