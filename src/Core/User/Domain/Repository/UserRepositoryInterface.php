<?php

namespace App\Core\User\Domain\Repository;

use App\Core\User\Domain\Exception\UserNotFoundException;
use App\Core\User\Domain\User;

interface UserRepositoryInterface
{
    /**
     * @throws UserNotFoundException
     */
    public function getByEmail(string $email): User;

    public function getActiveByEmail(string $email): User;

    public function getInactiveUsers(): array;

    public function save(User $user): void;

    public function flush(): void;

    public function checkIfUserExists(string $email): void;
}
