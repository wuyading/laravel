<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'province';
    function __construct(array $config = [])
    {
        parent::__construct($config);
    }
}