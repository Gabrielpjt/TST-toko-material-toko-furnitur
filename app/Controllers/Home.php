<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index() : string
    {
        $data = [ 
            'judul' => 'Homepage'
        ];
        return view('template/v_header', $data).view('template/v_sidebar').view('template/v_topbar').view('Home/index').view('template/v_footer');
    }
}
