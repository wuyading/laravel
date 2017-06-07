<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    function __construct(array $config = [])
    {
        parent::__construct($config);
    }
}