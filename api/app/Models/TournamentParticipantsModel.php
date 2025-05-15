<?php namespace App\Models;

use CodeIgniter\Model;
/**
 * @method insertID()
 */
class TournamentParticipantsModel extends Model
{
protected $table = 'tournament_participants';
protected $primaryKey = 'id';
protected $allowedFields = ['tournament_id', 'user_id'];
}