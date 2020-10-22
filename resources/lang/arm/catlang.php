<?php

use App\Category;

$catlang = Category::get()->toArray();

$arr = [];
foreach ($catlang as $v) {
    $arr[$v['name']] = $v['name'];
    $arr[$v['text']] = $v['text'];
}
return $arr;
