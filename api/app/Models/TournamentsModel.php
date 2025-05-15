<?php namespace App\Models;

use CodeIgniter\Model;
/**
 * @method insertID()
 */
class TournamentsModel extends Model
{
    protected $table = 'tournaments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'start_date', 'end_date', 'created_by'];
}