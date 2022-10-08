<?php

namespace App\Manager;
use App\Entity\User;
use Mina\Manager\AbstractManager;

class UserManager extends AbstractManager
{
    public function add(User $user) {
        return $this->create(User::class, [
            'email' => $user->getEmail(),
            'password' => password_hash($user->getPassword(),PASSWORD_BCRYPT),
            'created_at' => date_create()->format('Y-m-d H:i:s')
        ]);
    }

    public function edit(User $user) {
        // TODO
    }
}