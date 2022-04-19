<?php

namespace App\Http\OpenApiSpec\Fields;

use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

interface LaravelTimestamps
{
    /**
     * @OA\Property(property="created_at", example="blue"),
     * @OA\Property(property="updated_at", example="blue")
     */
}
