<?php

namespace App\Http\Resources;

use App\Http\OpenApiSpec\Fields\LaravelTimestamps;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *   @OA\Property(
 *     property="id",
 *     type="string",
 *     format="uuid",
 *     example="123e4567-e89b-12d3-a456-426614174000"
 *    ),
 *   @OA\Property(
 *     property="name",
 *     type="string",
 *     example="Jane Doe"
 *   ),
 *   @OA\Property(
 *     property="phone",
 *     oneOf={
 *     	   @OA\Schema(type="string"),
 *     	   @OA\Schema(type="integer"),
 *     },
 *     example="+13490830498"
 *   ),
 *   example={"id": "a3fb6", "name": "Jessica Smith", "phone": "+1234567890123"}
 * )
 *
 */
class UserResource extends JsonResource implements LaravelTimestamps
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
