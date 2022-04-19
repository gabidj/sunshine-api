<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *   @OA\Property(
 *     property="email",
 *     type="string",
 *     format="email",
 *     example="jane.doe@example.com"
 *    ),
 *   example={"id": "a3fb6", "name": "Jessica Smith", "phone": "+1234567890123", "email":"jane.doe@example.com"}
 * )
 */
class UserWithEmailResource extends UserResource
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
