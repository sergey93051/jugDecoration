<?php

use App\Productimgs;

$prolang = Productimgs::get()->toArray();

$arr = [];
foreach ($prolang as $v) {
    $arr[$v['title']] = $v['etitle'];
    $arr[$v['text']] = $v['etext'];
}
return $arr;
