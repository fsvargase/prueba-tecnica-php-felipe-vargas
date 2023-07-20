<?php

use PHPUnit\Framework\TestCase;
use App\Clases\User;

class UserTest extends TestCase
{
    public function testUserProperties(): void
    {
        $user = new User("John Doe", "john@example.com",  "password123");

        $this->assertEquals("john@example.com", $user->getEmail());
        $this->assertEquals("John Doe", $user->getName());
        $this->assertEquals("password123", $user->getPassword());
    }

    public function testSettersAndGetters(): void
    {
        $user = new User("John Doe","john@example.com",  "password123");

        $user->setName("Jane Doe");
        $user->setPassword("newpassword");

        $this->assertEquals("Jane Doe", $user->getName());
        $this->assertEquals("newpassword", $user->getPassword());
    }

}

