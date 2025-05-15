<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use App\Models\HighscoresModel;
use ReflectionException;

class Spiele extends BaseController
{
    public function getIndex(): string
    {
        $data = [
            'title' => 'Spiele'
        ];
        return view('pages/games/GameDashboard' , $data);
    }


    public function getPacman(): string
    {
        $data = [
            'title' => 'Pacman',
        ];
        return view('pages/games/Pacman', $data);
    }
    /**
     * @throws ReflectionException
     */

}
