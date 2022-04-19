<?php

namespace App\Http\OpenApiSpec;

use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

// These should only appear once in the API
/**
 * @OA\Info(title="My First API", version="0.1")
 * @OA\PathItem (path="/api/user")
 */
class OpenApiSpec
{
}
