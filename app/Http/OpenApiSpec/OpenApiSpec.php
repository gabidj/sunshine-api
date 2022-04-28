<?php

namespace App\Http\OpenApiSpec;

use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

// These should only appear once in the API
/**
 * @OA\Info(title="My First API", version="0.1")
 * @OA\PathItem (path="/api")
 * @OA\Server(
 *     description="SwaggerHUB API Mocking",
 *     url="https://virtserver.swaggerhub.com/swagger/Petstore/1.0.0"
 * )
 * @OA\ExternalDocumentation(
 *     description="Find out more EcoOnline",
 *     url="http://ecoonline.com"
 * )
 *
 * @OA\SecurityScheme(
 *     type="oauth2",
 *     name="sunshine_auth",
 *     securityScheme="sunshine_auth",
 *     @OA\Flow(
 *         flow="implicit",
 *         authorizationUrl="https://sunshine-api.test/oauth/dialog",
 *         scopes={
 *             "write:users": "modify users in your account",
 *             "read:users": "read your users",
 *         }
 *     )
 * )
 * @OA\SecurityScheme(
 *     type="apiKey",
 *     in="header",
 *     securityScheme="api_key",
 *     name="api_key"
 * )
 */
class OpenApiSpec
{
}
