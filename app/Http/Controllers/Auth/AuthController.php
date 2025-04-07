<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\LoginResource;
use App\Services\User\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct(
        protected UserService $userService = new UserService()
    ){
    }

    /**
     * Handle an authentication attempt.
     *
     * @param LoginRequest $request
     * @return LoginResource
     * @throws ValidationException
     */
    public function login(LoginRequest $request): LoginResource
    {
        $dto = $request->toDto();

        $token = $this->userService->loginUser($dto);

        return new LoginResource($token);
    }

    /**
     * Logout the authenticated user (revoke the token).
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        $user = $request->user();

        if ($user && $request->user()->currentAccessToken()) {
            $this->userService->logoutUser($user);
        }

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }
}
