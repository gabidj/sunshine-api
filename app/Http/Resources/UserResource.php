<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="My First API", version="0.1")
 * @OA\PathItem (path="/api/user")
 * @OA\Schema()
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     *
     * /**
     * @OA\Post(
     *     path="/users",
     *     summary="Adds a new user - with oneOf examples",
     *     description="Adds a new user",
     *     operationId="addUser",
     *     tags={"user"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="phone",
     *                     oneOf={
     *                     	   @OA\Schema(type="string"),
     *                     	   @OA\Schema(type="integer"),
     *                     }
     *                 ),
     *                 example={"id": "a3fb6", "name": "Jessica Smith", "phone": 12345678}
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             oneOf={
     *                 @OA\Schema(ref="#/components/schemas/User"),
     *                 @OA\Schema(type="boolean")
     *             },
     *             @OA\Examples(example="result", value={"success": true}, summary="An result object."),
     *             @OA\Examples(example="bool", value=false, summary="A boolean value."),
     *         )
     *     )
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
