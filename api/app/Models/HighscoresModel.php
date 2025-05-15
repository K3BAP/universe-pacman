<?php namespace App\Models;
use CodeIgniter\Model;
use ReflectionException;

/**
 * @method insertID()
 */
class HighscoresModel extends Model
{
    protected $table = 'highscores';
    protected $primaryKey = 'id';
    protected $allowedFields = ['personenid', 'gameid', 'highscore'];

    protected $updatedField = 'achieved_at';
    protected $dateFormat = 'datetime';

//    protected $validationRules = 'highscores';

    public function getHighscores($gameid): array
    {
        return $this->db->table($this->table)
            ->select('personen.vorname, personen.nachname, highscores.highscore')
            ->join('personen', 'personen.id = highscores.personenid')
            ->where('highscores.gameid', $gameid)
            ->orderBy('highscores.highscore', 'DESC')
            ->get()->getResultArray();
    }

    public function getPersonalHighscore($personenid, $gameid): int
    {
        return $this->db->table($this->table)
            ->select('highscore')
            ->where('personenid', $personenid)
            ->where('gameid', $gameid)
            ->orderBy('highscore', 'DESC')
            ->get()->getRowArray()['highscore'] ?? 0;
    }

    public function getGlobalTopScore($gameid): int
    {
        return $this->db->table($this->table)
            ->select('highscore')
            ->where('gameid', $gameid)
            ->orderBy('highscore', 'DESC')
            ->get()->getRowArray()['highscore'] ?? 0;
    }

    /**
     * @throws ReflectionException
     */
    public function submitHighscore($gameid, $highscore): bool
    {
        if ($this->getPersonalHighscore($_COOKIE['userid'], $gameid) < $highscore) {
            $existingEntry = $this->where('personenid', $_COOKIE['userid'])
                ->where('gameid', $gameid)
                ->first();

            if ($existingEntry) {
                // Update the existing entry
                $this->update($existingEntry['id'], [
                    'highscore' => $highscore,
                ]);
            } else {
                // Insert a new entry
                $this->insert([
                    'personenid' => $_COOKIE['userid'],
                    'gameid' => $gameid,
                    'highscore' => $highscore,
                ]);
            }
            return true;
        }
        return false;

    }
}
