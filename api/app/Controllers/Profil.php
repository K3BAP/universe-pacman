<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use App\Models\GameAccountsModel;
use App\Models\DiscordAccountsModel;
use ReflectionException;

class Profil extends BaseController
{
    public function getIndex($userid = -1)
    {
        if ($userid == -1) {
            $userid = $_COOKIE['userid'];
        }
        $personenModel = new PersonenModel();
        $gameAccountsModel = new GameAccountsModel();
        $discordAccountsModel = new DiscordAccountsModel();
        $data = [
            'title' => 'Profil',
            'user' => $personenModel->find($userid),
            'user_gameaccounts' => $gameAccountsModel->gameAccountInfos($userid),
            'user_discord' => $discordAccountsModel->discordAccountInfos($userid),
        ];
//        echo var_dump($data);
        return view('pages/user/BenutzerProfil', $data);
    }
}
