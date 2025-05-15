<?php namespace App\Models;
use CodeIgniter\Model;

/**
 * @method insertID()
 */
class DiscordAccountsModel extends Model
{
    protected $table = 'discord_accounts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username'];
    public function discordAccountInfos($userid): array
    {
        return $this->db->table($this->table)
            ->select('discord_accounts.id, discord_accounts.username')
            ->where('personenid', $userid)
            ->get()
            ->getResultArray();
    }
}
