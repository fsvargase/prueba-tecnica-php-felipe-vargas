<?php

use PHPUnit\Framework\TestCase;
use App\Clases\User;

class UserTest extends TestCase
{
    public function testUserAttributes(): void
    {
        $user = new User("John Doe", "john@example.com", "password123");

        $this->assertEquals("John Doe", $user->getName());
        $this->assertEquals("john@example.com", $user->getEmail());
        $this->assertEquals("password123", $user->getPassword());
    }

}

