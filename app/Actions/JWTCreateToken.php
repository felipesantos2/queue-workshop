<?php

namespace App\Actions;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTCreateToken
{
    public function __invoke()
    {
        $key = env('JWT_TOKEN', '');

        $payload = [
            'iss' => url('/'),
            'aud' => url('login'),
            'iat' => time(),
            'nbf' => time(),
        ];

        $jwt = JWT::encode($payload, $key, 'HS256');

        $decoded = JWT::decode($jwt, new Key($key, 'HS256'));

        print_r($decoded);

        $decoded = JWT::decode($jwt, new Key($key, 'HS256'), $headers = new stdClass);

        print_r($headers);

        $decoded_array = (array) $decoded;

        JWT::$leeway = 60; // $leeway in seconds
        $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
    }
}
