<?php

namespace App\Services\User\Dto;

class LoginDto
{
    public function __construct(
        public string $email,
        public string $password,
    ) {
    }
}
