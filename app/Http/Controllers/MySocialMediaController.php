<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySocialMediaController extends Controller
{
    protected $menu = 'my_social_media';
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'menu' => $this->menu
        ];
        return view('users.my_social_media.index', $data);
    }
    public function connect($social_media_name)
    {
        if (!$social_media_name) {
            return redirect()->back();
        }
    }
}
