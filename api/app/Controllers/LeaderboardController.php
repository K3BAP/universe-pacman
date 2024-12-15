<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use ReflectionException;

class LeaderboardController extends BaseController
{
    public function index(): string
    {
        $personenModel = new PersonenModel();
        $data = [
            'title' => 'Leaderboard',
            'users' => $personenModel->orderBy('highscore', 'DESC')->findAll(),
        ];
        return view('pages/Leaderboard', $data);
    }

    public function getHighestScore()
    {
        $personenModel = new PersonenModel();
        $data = [
            'title' => 'Leaderboard',
            'users' => $personenModel->orderBy('highscore', 'DESC')->findAll(),
        ];
        return $this->response->setJSON(['success' => true, 'highscore' => $data['users'][0]['highscore']]);
    }

    /**
     * @throws ReflectionException
     */
}
