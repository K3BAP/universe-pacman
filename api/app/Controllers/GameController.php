<?php

namespace App\Controllers;

use App\Models\PersonenModel;
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
        return view('pages/games/Pacman');
    }
    /**
     * @throws ReflectionException
     */
    public function postSubmitHighscore($highscore)
    {
        $personenModel = new PersonenModel();
        $personenModel->update($_COOKIE['userid'], ['highscore' => $highscore]);


        return $this->response->setJSON(['success' => true, 'highscore' => $highscore]);
    }
    public function getHighscore()
    {
        $userId = $_COOKIE['userid'];

        $personenModel = new PersonenModel();
        $user = $personenModel->find($userId);

        if ($user) {
            return $this->response->setJSON(['success' => true, 'highscore' => $user['highscore']]);
        } else {
            return $this->response->setJSON(['success' => false, 'error' => 'User not found']);
        }
    }
}
