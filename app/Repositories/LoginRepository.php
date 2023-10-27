<?php

namespace App\Repositories;

use App\Interfaces\LoginRepositoryInterface;
use App\Models\User;
use App\Request\LoginRequest;

class LoginRepository implements LoginRepositoryInterface 
{
    public function login($request) 
    {
        $email = $request->email;
        $password = $request->password;

        if ($this->authenticateUser($email, $password)) {
            $token = JWT::encode([
                'username' => $username,
            ], config('jwt.secret'));
    
            return [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => config('jwt.ttl') * 60, 
            ];
        }
    
        return [
            'message' => 'Credenciais inválidas',
        ];
    }

    private function authenticateUser($email, $password)
    {
        $validator = $this->getValidationFactory()->make(
            ['email' => $email, 'password' => $password],
            (new LoginRequest())->rules(),
            (new LoginRequest())->messages()
        );

        if ($validator->fails()) {
            return false; 
        }

        $user = User::where('email', $email)->first();

        if (!$user || !password_verify($password, $user->password)) {
            return false; 
        }

        return true; 
    }

}
