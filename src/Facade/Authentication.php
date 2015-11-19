<?php
/**
 * Created by PhpStorm.
 * User: n0m4dz
 * Date: 11/10/15
 * Time: 4:48 PM
 */

namespace Solarcms\Authentication\Facade;

use Illuminate\Support\Facades\Facade as Facade;

class Authentication extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Authentication';
    }
}