<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Resources\DataResource;
use App\Models\User;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\User\UserUpdateRequest;
use Spatie\QueryBuilder\QueryBuilder;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('admin.check');
    }

    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $users = QueryBuilder::for(User::class)
            ->where('is_admin', 0)
            ->paginate(10);
        return DataResource::collection($users);
    }

    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function indexAdmin(): AnonymousResourceCollection
    {
        $users = QueryBuilder::for(User::class)
            ->where('is_admin', 1)
            ->paginate(10);
        return DataResource::collection($users);
    }


    /**
     * Show the specified resource.
     * @param User $id
     * @return DataResource
     */
    public function show(User $id): DataResource
    {
        User::whereId($id->id)->firstOrFail();
        return new DataResource($id);
    }


    /**
     * Update the specified resource in storage.
     * @param UserUpdateRequest $request
     * @param User $id
     * @return DataResource
     */
    public function update(UserUpdateRequest $request, User $id): DataResource
    {
        $id->update($request->validated());
        return new DataResource($id);
    }

}
