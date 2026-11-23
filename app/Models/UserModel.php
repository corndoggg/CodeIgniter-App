<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'userid';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;

    protected $allowedFields = [
        'lastname',
        'firstname',
        'middlename',
        'username',
        'password',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'entrydate';
    protected $updatedField  = 'lastupdatingdate';
    protected $deletedField  = 'datedeleted';
}
