<?php

namespace App\Http\OpenApiSpec\Response;

// These should only appear once in the API
/**
 * @OA\Schema (
 *   @OA\Property (
 *     property="message",
 *     type="string",
 *     example="Internal Server Error"
 *    ),
 *   example={"message": "Something went wrong on the server side"}
 * )
 */
class InternalServerError
{
}
