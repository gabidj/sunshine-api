<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * @OA\PathItem (path="/api/user")
 */
class UserController extends Controller
{
    /**
     *
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return UserResource::collection(User::query()->select(['name', 'phone', 'id']));
    }

    /**
    * @OA\Response(
    *     response=200,
    *     description="successful operation",
    *     @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/UserWithEmailResource"),
    *     )
    * ),
    * @OA\Response(
    *     response=404,
    *     description="User not found",
    *     @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(ref="#/components/schemas/NotFound"),
    *     )
    * )
    */
    public function show(Request $request)
    {
        /**  */
        $user = User::findOrFail($request->route('id'));
    }
}
