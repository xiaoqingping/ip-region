<?php
require_once '../../vendor/autoload.php';

use IpRegion\IpRegion;

var_dump(IpRegion::search('27.151.96.22'));  // 默认btree查询
var_dump(IpRegion::search('27.151.96.22', 'btree'));
var_dump(IpRegion::search('27.151.96.22', 'memory'));
var_dump(IpRegion::search('27.151.96.22', 'binary'));

$ipRegion = new IpRegion;
var_dump($ipRegion->btreeSearch('27.151.96.22'));
var_dump($ipRegion->memorySearch('27.151.96.22'));
var_dump($ipRegion->binarySearch('27.151.96.22'));
