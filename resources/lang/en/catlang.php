<?php

use App\Category;

$catlang = Category::get()->toArray();

$arr = [];
foreach ($catlang as $v) {
    $arr[$v['name']] = $v['ename'];
    $arr[$v['text']] = $v['etext'];
}
return $arr;
