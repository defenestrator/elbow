<?php

namespace Elbow\Exceptions;

use Exception;

class Corruption extends Exception
{
    protected $message = 'This data has been defined as immutable. 
                        The record you are trying to retrieve has been corrupted.';
}