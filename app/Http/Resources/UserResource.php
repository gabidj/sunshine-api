<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="My First API", version="0.1")
 * @OA\PathItem (path="/api/user")
 * @OA\Schema(
 *   @OA\Property(
 *     property="id",
 *     type="string"
 *    ),
 *    @OA\Property(
 *     property="name",
 *     type="string"
 *    ),
 *    @OA\Property(
 *     property="phone",
 *     oneOf={
 *     	   @OA\Schema(type="string"),
 *     	   @OA\Schema(type="integer"),
 *     }
 *    ),
 *    example={"id": "a3fb6", "name": "Jessica Smith", "phone": 12345678}
 * )
 *
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
