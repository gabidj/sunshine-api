<?php

namespace App\Http\OpenApiSpec\Response;

// These should only appear once in the API
/**
 * @OA\Schema (
 *   @OA\Property (
 *     property="message",
 *     type="string",
 *     example="The entity was not found"
 *    ),
 *   example={"message": "The entity was not found"}
 * )
 */
class NotFound
{
}
