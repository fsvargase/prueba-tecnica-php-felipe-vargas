<?php

use PHPUnit\Framework\TestCase;
use App\Clases\User;

class UserTest extends TestCase
{
    public function testUserAttributes(): void
    {
        $user = new User("Felipe Vargas", "felipe@example.com", "password123");

        $this->assertEquals("Felipe Vargas", $user->getName());
        $this->assertEquals("felipe@example.com", $user->getEmail());
        $this->assertEquals("password123", $user->getPassword());
    }

}
