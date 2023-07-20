<?php

class UserAlreadyExistsException extends Exception
{
    public function __construct(string $email)
    {
        parent::__construct("El usuario con email '{$email}' ya está registrado en el sistema.");
    }
}

