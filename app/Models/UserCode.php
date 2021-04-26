<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Statu
 * @package App\Models
 * @version January 25, 2021, 6:35 pm UTC
 *
 * @property string $name
 */
class UserCode extends Model
{
    

    public $table = 'user_code';

    public $fillable = [
        'user_id',
        'code'
    ];

        
}
