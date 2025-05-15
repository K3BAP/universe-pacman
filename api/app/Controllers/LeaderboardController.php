<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use App\Models\HighscoresModel;
use ReflectionException;

class LeaderboardController extends BaseController
{
    public function index(): string
    {
        $highscoresModel = new HighscoresModel();
        $data = [
            'title' => 'Leaderboard',
            'highscores' => $highscoresModel->getHighscores(3),
        ];
        return view('pages/Leaderboard', $data);
    }

    public function getHighestScore()
    {
        $highscoresModel = new HighscoresModel();

        return $this->response->setJSON(['success' => true, 'highscore' => $highscoresModel->getGlobalTopScore(3)]);
    }

    /**
     * @throws ReflectionException
     */
}
