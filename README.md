# IP Region
基于[ip2region](https://github.com/lionsoul2014/ip2region)开发，具体调用请参考该项目。

## 修改
* 代码调整后，符合PSR2规范要求
* 去除全局常量定义，改为类的const变量
* 增加静态调用方法

## 安装
```
composer require xiaoqingping/ip-region:dev-master
```
或
编辑composer.json
```
{
    "require": {
        "xiaoqingping/ip-region": "dev-master"
    }
}
```
然后执行命令
```
composer install
```

## 用法
实例化调用
```php
<?php
require_once './vendor/autoload.php';

use Lemon\IpRegion;
$ipRegion = new IpRegion;
var_dump($ipRegion->btreeSearch('127.0.0.1'));
```

静态方法调用
```php
<?php
require_once './vendor/autoload.php';

use Lemon\IpRegion;

var_dump(IpRegion::search('127.0.0.1'));
var_dump(IpRegion::search('127.0.0.1', 'memory'));
```


