<?php

namespace Elbow;

use Elbow\Prototype as Model;
use Elbow\Traits\Immutable;

class GameMove extends Model
{
    use Immutable; 

    public function __construct()
    {
        static::$hashCheck = true;
    }
    /**
     * getHashKey
     *
     * @return string
     */
    protected function getHashKey() : string
    {
        return 'hash';
    }

    /**
     * getContentKey
     *
     * @return string
     */
    protected function getContentKey() : string
    {
        return 'state';
    }
}
