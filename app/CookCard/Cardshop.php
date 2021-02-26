<?php

namespace App\CookCard;


class Cardshop
{
    protected $countCard;
    protected $id;
    protected $img;
    protected $itemNameProd;
    protected $totalPrace;
    protected $totalcash;


    public function Cardshop($id, $i, $it, $tp, $tc)
    {
        $this->id = $id;
        $this->img = $i;
        $this->itemNameProd = $it;
        $this->totalPrace = $tp;
        $this->totalcash = $tc;

        return $this->cookieadd();
    }
    public function cookieadd()
    {
        $newcard = isset($_COOKIE["shopp"]) ? $_COOKIE["shopp"] : "[]";
        $newcard = json_decode($newcard);

        foreach ($newcard as  $value) :
            if ($this->id == $value->id) {
                die;
            }
        endforeach;
        array_push($newcard, array(
            "id" => $this->id,
            "img" => $this->img,
            "itemNameProd" =>  $this->itemNameProd,
            "totalPrace" => $this->totalPrace,
            "totalcash" => $this->totalcash
        ));

        setcookie("shopp", json_encode($newcard), time() + (500000 * 30), "/");
    }
}
