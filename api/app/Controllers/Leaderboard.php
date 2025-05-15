<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use App\Models\HighscoresModel;
use ReflectionException;

class Leaderboard extends BaseController
{
    public function getIndex(): string
    {
        $highscoresModel = new HighscoresModel();
        $data = [
            'title' => 'Leaderboard',
            'highscores' => $highscoresModel->getHighscores(3),
        ];
        return view('pages/Leaderboard', $data);
    }

    public function getHighscore($gameid)
    {
        $highscoresModel = new HighscoresModel();

        return $this->response->setJSON(['success' => true, 'highscore' => $highscoresModel->getGlobalTopScore($gameid)]);
    }
    public function postSubmitHighscore($gameid, $highscore)
    {
        $highscoreModel = new HighscoresModel();
        $highscoreModel->submitHighscore($gameid, $highscore);


        return $this->response->setJSON(['success' => true, 'highscore' => $highscore]);
    }
    public function getPersonalHighscore($gameid)
    {

        $highscoreModel = new HighscoresModel();
        $highscore = $highscoreModel->getPersonalHighscore($_COOKIE['userid'], $gameid);
        if ($highscore) {
            return $this->response->setJSON(['success' => true, 'highscore' => $highscore]);
        } else {
            return $this->response->setJSON(['success' => false, 'error' => 'Highscore not found']);
        }
    }
}
