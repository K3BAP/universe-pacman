<?php namespace App\Models;
use CodeIgniter\Model;

/**
 * @method insertID()
 */
class GamesModel extends Model
{
    protected $table = 'games';
    protected $primaryKey = 'id';
    protected $allowedFields = ['game'];
//    protected $validationRules = 'games';
}
