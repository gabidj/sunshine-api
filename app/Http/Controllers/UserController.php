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
     * @OA\Get(path="/users",
     *     tags={"user"},
     *     summary="Get One user",
     *     security={
     *         {"sunshine_auth": {"read:users"}}
     *     },
     *     description="This can only be done by the logged in user.",
     *     operationId="showUserList",
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
    public function index()
    {
        return UserResource::collection(User::query()->select(['name', 'phone', 'id']));
    }

    /**
     */
    public function myNewEndpoint()
    {

    }

    /**
     * @OA\Get(path="/user/me",
     *     tags={"user"},
     *     summary="Get One user",
     *     description="This can only be done by the logged in user.",
     *     operationId="showMe",
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

    // DEMO:
    // OA

    // WE CAN CONSIDER THIS ONE FOR EASIER "writability"
    /**
     * @OA\Get(path="/user", summary="Get One user", tags={"user"},
     *     description="This can only be done by the logged in user.",
     *     operationId="showUser_ThisFieldIsOptional_ThisCouldBeTheRouteName",
     *     security={
     *         {"sunshine_auth": {"read:users"}}
     *     },
     *     @OA\Response(response=200, description="successful operation", @OA\MediaType(mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/UserWithEmailResource"),
     *         )
     *     ),
     *     @OA\Response(response=404, description="User not found", @OA\MediaType(mediaType="application/json",
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
     *     security={
     *         {"sunshine_auth": {"write:users"}}
     *     },
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
