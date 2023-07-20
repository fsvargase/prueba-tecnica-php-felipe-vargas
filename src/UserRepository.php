<?php
namespace App\Clases;

class UserRepository
{
    private array $users = [];

    public function save(User $user): void
    {
        $email = $user->getEmail();

        if ($this->getByEmail($email)) {
            throw new UserAlreadyExistsException($email);
        }

        $this->users[$email] = $user;
    }

    public function update(User $user): void
    {
        $email = $user->getEmail();

        if (!$this->getByEmail($email)) {
            throw new UserNotFoundException($email);
        }

        $this->users[$email] = $user;
    }

    public function delete(User $user): void
    {
        $email = $user->getEmail();

        if (!$this->getByEmail($email)) {
            throw new UserNotFoundException($email);
        }

        unset($this->users[$email]);
    }

    public function getByEmail(string $email): ?User
    {
        return $this->users[$email] ?? null;
    }
}


