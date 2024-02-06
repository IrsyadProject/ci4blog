<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Admin | Blog Ci4',
            'validation' => null
        ];

        return view('backend/pages/auth/login', $data);
    }
}
