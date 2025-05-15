<?php

namespace App\Models;

use CodeIgniter\Model;
class TeamMembersModel extends Model
{
    protected $table = 'team_members';
    protected $primaryKey = 'id';
    protected $allowedFields = ['team_id', 'user_id'];

    public function getTeamMembers($teamId): array
    {
        return $this->db->table($this->table)
            ->select('user_id, game_accounts.username, game_accounts.usertag')
            ->join('game_accounts', 'game_accounts.id = team_members.user_id')
            ->where('team_id', $teamId)
            ->get()->getResultArray();
    }
}