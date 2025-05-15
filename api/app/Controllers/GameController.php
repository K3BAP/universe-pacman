<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use App\Models\HighscoresModel;
use ReflectionException;

class GameController extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Game Dashboard'
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
    public function postSubmitHighscore($highscore)
    {
        $highscoreModel = new HighscoresModel();
        $gameid = 3;
        $highscoreModel->submitHighscore($gameid, $highscore);


        return $this->response->setJSON(['success' => true, 'highscore' => $highscore]);
    }
    public function getPersonalHighscore()
    {

        $highscoreModel = new HighscoresModel();
        $gameid = 3;
        $highscore = $highscoreModel->getPersonalHighscore($_COOKIE['userid'], $gameid);
        if ($highscore) {
            return $this->response->setJSON(['success' => true, 'highscore' => $highscore]);
        } else {
            return $this->response->setJSON(['success' => false, 'error' => 'Highscore not found']);
        }
    }
}
