<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Resources\DataResource;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\User\UserUpdateRequest;
use Modules\Core\Entities\JobType;
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
    public function update(UserUpdateRequest $request,User $id): DataResource
    {
        $id->update($request->validated());
        return new DataResource($id);
    }

}
