<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use App\Models\TeamsModel;
use App\Models\TeamMembersModel;
use ReflectionException;

class Teams extends BaseController
{
    public function getIndex()
    {
        $teamsModel = new TeamsModel();
        $teamMembersModel = new TeamMembersModel();
        $data = [
            'title' => 'Teams',
        ];
        return view('pages/TeamsView', $data);
    }

    /**
     * @throws ReflectionException
     */
    public function postCreate()
    {
        $teamsModel = new TeamsModel();

        $teamData = [
            'name' => $this->request->getPost('name'),
            'leader_id' => $_COOKIE['userid'], // Assuming the logged-in user is the leader
        ];
        $teamsModel->insert($teamData);


        return redirect()->to('/teams')->with('success', 'Team created successfully.');
    }
}
