<?php

require __DIR__ . '/vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTService
{
    // Signing key used to encode and decode the JWT.
    private $key = 'example_key';

    public function encodeToken(array $payload): string
    {
        return JWT::encode($payload, $this->key, 'HS256');
    }

    public function checkToken(string $token): string
    {
        $isValidToken = false;

        return $isValidToken;
    }

    public function decodeToken(string $token): array
    {
        $decodedData = [];

        return $decodedData;
    }
}
