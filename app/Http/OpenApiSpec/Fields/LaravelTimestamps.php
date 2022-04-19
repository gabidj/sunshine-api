<?php

namespace App\Http\OpenApiSpec\Fields;

use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema (
 *   @OA\Property(
 *       property="created_at",
 *       type="date-time",
 *       example="2022-01-04 12:34:56"
 *   ),
 *   @OA\Property(
 *       property="updated_at",
 *       type="date-time",
 *       example="2022-01-04 12:34:56"
 *   )
 * )
 */
interface LaravelTimestamps
{

}
