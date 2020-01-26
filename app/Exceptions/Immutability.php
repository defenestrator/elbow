<?php

namespace Elbow\Exceptions;

use Exception;

class Immutability extends Exception
{
    protected $message = 'You are trying to alter a Model that has been defined as immutable.';
}