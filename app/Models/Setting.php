<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
    function __construct(array $config = [])
    {
        parent::__construct($config);
    }
}