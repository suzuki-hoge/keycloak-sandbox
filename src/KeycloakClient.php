<?php

namespace Sandbox;

use GuzzleHttp\Client;

//use Firebase\JWT\JWT;

class KeycloakClient
{
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://keycloak:8080/'
        ]);
    }

    function post(string $path, array $params): array
    {
        $response = $this->client->request(
            'POST',
            $path,
            ['form_params' => $params]
        );
        return json_decode((string)$response->getBody(), true);
    }
}
