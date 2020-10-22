<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Like;
use App\Liketot;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::guard("newuser");
    }
    public function likeshow($id)
    {
        if ($id == true) {
            $like = 1;
            $sumTottle = Like::where("prod_id", $id)->sum("like");
            $totnum = $this->user->user()->Like()->where("prod_id", $id)->pluck('like');

            if (count($totnum) > 0) {
                $sumTottle--;
                $this->user->user()->Like()->where("prod_id", $id)->delete();
            } else {
                $sumTottle++;
                $save = $this->user->user()->Like()->create([
                    "like" => $like,
                    "prod_id" => $id,
                ]);
                $this->user->user()->Like()->save($save);
            }

            Liketot::where("prod_id", $id)->update([
                "tottle" => $sumTottle
            ]);
            return $sumTottle;
        }
    }
}
