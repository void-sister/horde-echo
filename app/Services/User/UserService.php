<?php

namespace App\Services\User;

use App\Models\User;
use App\Repositories\User\UserRepository;
use App\Services\User\Dto\LoginDto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserService {

    public function __construct(
        protected UserRepository $userRepository = new UserRepository(),
    ){
    }

    /**
     * Handle an authentication attempt.
     *
     * @param LoginDto $dto
     * @return string
     * @throws ValidationException
     */
    public function loginUser(LoginDto $dto): string
    {
        $credentials = [
            'email' => $dto->email,
            'password' => $dto->password,
        ];

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $user = $this->userRepository->getByEmail($dto->email);

        return $user->createToken('login-token')->plainTextToken;
    }

    /**
     * Logout the authenticated user (revoke the token).
     *
     * @param User $user
     * @return void
     */
    public function logoutUser(User $user): void
    {
        $user->currentAccessToken()->delete();
    }
}
