<?php namespace App\Models;
use CodeIgniter\Model;

/**
 * @method insertID()
 */
class PersonenModel extends Model
{
    protected $table = 'personen';
    protected $primaryKey = 'id';
    protected $allowedFields = ['vorname', 'nachname', 'email', 'passwort', 'permission', 'banned'];

    protected $createdField = 'created_at';
    protected $dateFormat = 'date';
    protected $validationRules = 'personen';

    public function getDashboardData(): array
    {

        return $this->db->table($this->table)
            ->select('id, vorname, nachname, email, permission')
            ->get()->getResultArray();
    }

    public function getPersonenRowByEmail($email): array | null
    {
        return $this->db->table($this->table)
            ->where('email', $email)
            ->get()->getRowArray();
    }

    public function getSecurePerson($userid): array
    {
        return $this->db->table($this->table)
            ->select('vorname, nachname')
            ->where('id', $userid)
            ->get()->getResultArray();
    }

    public function getProfileData($userid): array
    {
        return $this->db->table($this->table)
            ->select('personen.id, vorname, nachname, game_accounts.gameid, game_accounts.username, game_accounts.usertag discord_accounts.username')
            ->join('game_accounts', 'personen.id = game_accounts.personenid', 'left')
            ->join('discord_accounts', 'personen.id = discord_accounts.personenid', 'left')
            ->where('personen.id', $userid)
            ->get()->getResultArray();
    }

}
