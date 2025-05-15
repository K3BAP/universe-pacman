<?php namespace App\Models;
use CodeIgniter\Model;

/**
 * @method insertID()
 */
class GameAccountsModel extends Model
{
    protected $table = 'game_accounts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['personenid', 'gameid', 'username', 'usertag'];
//    protected $validationRules = 'game_accounts';
    public function gameAccountInfos($userid): array
    {
        return $this->db->table($this->table)
            ->select('game_accounts.id, game_accounts.username, game_accounts.usertag, games.game')
            ->join('games', 'games.id = game_accounts.gameid')
            ->where('personenid', $userid)
            ->get()
            ->getResultArray();

    }


}
