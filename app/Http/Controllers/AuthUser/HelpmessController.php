<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Http\Requests\HelpRequest;
use App\Mail\Helps;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;



class HelpmessController extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->user = Auth::Guard('newuser');
    }

    public function helpmess(HelpRequest $r)
    {

        $image = '';
        if ($r->hasFile('files')) {
            $img2_name = $r->file("files");
            $image = base64_encode(file_get_contents($img2_name));
        }
        $save = $this->user->User()->Helpmess()->create([
            "data" => $image,
            "description" => $r->input("texts")
        ]);
        $this->user->User()->Helpmess()->save($save);
        Mail::to($this->user->User()->email)->send(new Helps());
        Mail::raw('new message in the Admin panel', function ($message) {
            $message->to("sergey93051@mail.ru", 'Jug')->subject('Jug message');
        });
    }
}
