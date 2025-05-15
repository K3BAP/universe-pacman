<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * @method insertID()
 */
class TeamsModel extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'leader_id'];
}