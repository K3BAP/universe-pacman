<?php

namespace App\Models;

use CodeIgniter\Model;

class MatchesModel extends Model
{
    protected $table = 'matches';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tournament_id', 'round', 'bracket', 'participant_1', 'participant_2', 'winner_id', 'loser_id', 'participant_type'];
}
