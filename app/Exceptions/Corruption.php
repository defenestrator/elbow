<?php

namespace Elbow\Exceptions;

use Exception;

class Corruption extends Exception
{
    protected $message = 'The model you are trying to retrieve has been corrupted. 
                        Probably by some DBA editing a production datastore in place. 
                        Bad DBA, and/or Ops, no pizza! Just kidding, we coders are probably worse.';
}