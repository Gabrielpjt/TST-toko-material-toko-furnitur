<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function __construct(){
        helper('en');
        $this->session = service('session');
        $this->auth   = service('authentication');
    }

    public function index() : string
    {
        //jika belum login,user tidak memiliki akses
        if (!$this->auth->check()) {
            $redirectURL = session('redirect_url') ?? site_url($this->config->landingRoute);
            unset($_SESSION['redirect_url']);

            return redirect()
                ->to($redirectURL);
        }

        $data = [ 
            'judul' => 'Homepage'
        ];
        return view('template/v_header', $data).view('template/v_sidebar').view('template/v_topbar').view('Home/index').view('template/v_footer');
    }
}
