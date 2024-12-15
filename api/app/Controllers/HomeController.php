<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use ReflectionException;

class HomeController extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
        ];
        return view('pages/HomeView', $data);
    }
}
