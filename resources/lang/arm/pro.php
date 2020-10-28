<?php

use App\Productimgs;

$prolang = Productimgs::get()->toArray();

$arr = [];
foreach ($prolang as $v) {
    $arr[$v['title']] = $v['title'];
    $arr[$v['text']] = $v['text'];
}
return $arr;
