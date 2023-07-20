<?php

class UserNotFoundException extends Exception
{
    public function __construct(string $email)
    {
        parent::__construct("El usuario con email '{$email}' no existe en el sistema.");
    }
}

