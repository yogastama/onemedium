<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    protected $menu = 'account';
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'menu' => $this->menu
        ];
        return view('users.account.index', $data);
    }
}
