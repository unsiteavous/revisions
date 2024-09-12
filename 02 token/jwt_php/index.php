<?php

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/JWTService.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// Signing key used to encode and decode the JWT.
$key = "example_key";

// The payload which will be encoded in the JWT, containing various information.
$payload = [
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    "iat" => 1356999524,
    "nbf" => 1357000000
];

// Encoding the payload into a JWT with the HS256 algorithm and the key provided.
// $jwt = JWT::encode($payload, $key, "HS256");

// Decoding the JWT to get the original data with HS256 algorithm and key.
// $decoded = JWT::decode($jwt, new Key($key, "HS256"));

// By default, the result will be an object. To get an associative array you need to convert it like this.
// $decoded_array = (array) $decoded;

// I advise you to create a class that will take care of all the token manipulations ;)
// $JWTService = new JWTService();
// var_dump($JWTService->encodeToken(["name" => "Kévin"]));
