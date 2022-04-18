<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="My First API", version="0.1")
 * @OA\PathItem (path="/api/user")
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
    /**
     * OA\Get(
     *     path="/api/resource.json",
     *     @OA\Response(response="200", description="An example resource")
     * )
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
