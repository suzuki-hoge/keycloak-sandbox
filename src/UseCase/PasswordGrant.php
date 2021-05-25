<?php

namespace Sandbox\UseCase;

use Sandbox\KeycloakClient;

class PasswordGrant
{
    function call()
    {
        $client = new KeycloakClient();
        $response = $client->post(
            '/auth/realms/main-realm/protocol/openid-connect/token',
            ['client_id' => 'admin-cli', 'username' => 'user1', 'password' => 'user1', 'grant_type' => 'password']
        );
        $accessToken = $response['access_token'];

        echo json_encode(['label' => 'password grant', 'access_token' => $accessToken]);
    }
}
