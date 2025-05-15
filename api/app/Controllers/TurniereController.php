<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use ReflectionException;

class TurniereController extends BaseController
{
    public function index(): string
    {
        $personenModel = new PersonenModel();
        $data = [
            'title' => 'Turniere',
        ];
        return view('pages/TurniereView', $data);
    }
}
