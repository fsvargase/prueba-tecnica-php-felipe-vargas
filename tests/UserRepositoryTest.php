<?php

use PHPUnit\Framework\TestCase;
use App\Clases\User;
use App\Clases\UserRepository;
/*
use App\Clases\UserNotFoundException;
use App\Clases\UserAlreadyExistsException;*/


class UserRepositoryTest extends TestCase
{
    public function testSaveAndGetUserByEmail(): void
    {
        $userRepo = new UserRepository();

        $user = new User("John Doe","john@example.com",  "password123");
        $userRepo->save($user);

        $this->assertEquals($user, $userRepo->getByEmail("john@example.com"));
    }

    public function testUpdateUser(): void
    {
        $userRepo = new UserRepository();

        $user = new User("John Doe","john@example.com",  "password123");
        $userRepo->save($user);

        $user->setName("Jane Doe");
        $userRepo->update($user);

        $this->assertEquals($user, $userRepo->getByEmail("john@example.com"));
    }

    public function testDeleteUser(): void
    {
        $userRepo = new UserRepository();

        $user = new User("John Doe","john@example.com",  "password123");
        $userRepo->save($user);

        $userRepo->delete($user);

        $this->assertNull($userRepo->getByEmail("john@example.com"));
    }

}

