<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    function __construct(array $config = [])
    {
        parent::__construct($config);
    }
}