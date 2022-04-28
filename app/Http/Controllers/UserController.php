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
     * @OA\Get(path="/user",
     *     tags={"user"},
     *     summary="Get One user",
     *     description="This can only be done by the logged in user.",
     *     operationId="showUser",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/UserWithEmailResource"),
     *         )
     *     ),
     *     @OA\Response(
     *          response=500,
     *         description="User not found",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/InternalServerError"),
     *         )
     *     )
     * )
     */
    public function me()
    {

    }

    /**
     * @OA\Get(path="/user",
     *     tags={"user"},
     *     summary="Get One user",
     *     description="This can only be done by the logged in user.",
     *     operationId="showUser",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/UserWithEmailResource"),
     *         )
     *     ),
     *     @OA\Response(
     *          response=404,
     *         description="User not found",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/NotFound"),
     *         )
     *     )
     * )
     */
    public function show(Request $request)
    {
        $user = User::findOrFail($request->route('id'));
        return response()->paginateList();
    }

    /**
     * @OA\Post(path="/user",
     *     tags={"user"},
     *     summary="Create user",
     *     description="This can only be done by the logged in user.",
     *     operationId="createUser",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Created user object",
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(ref="#/components/schemas/User")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/UserWithEmailResource"),
     *         )
     *     ),
     *     @OA\Response(
     *          response=404,
     *         description="User not found",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/NotFound"),
     *         )
     *     )
     * )
     */
    public function store()
    {

    }
}
