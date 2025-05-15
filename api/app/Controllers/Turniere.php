<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use ReflectionException;

class Turniere extends BaseController
{
    public function getIndex(): string
    {
        $personenModel = new PersonenModel();
        $data = [
            'title' => 'Turniere',
        ];
        return view('pages/TurniereView', $data);
    }
}
