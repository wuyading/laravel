<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017-06-06
 * Time: 17:25
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    function __construct(array $config = [])
    {
        parent::__construct($config);
    }
}