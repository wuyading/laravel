<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017-06-06
 * Time: 17:25
 */

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    function __construct(array $config = [])
    {
        parent::__construct($config);
    }
}