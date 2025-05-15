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


}
