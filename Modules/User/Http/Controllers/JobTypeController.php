<?php

namespace Modules\User\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\JobType;
use Spatie\QueryBuilder\QueryBuilder;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $jobtypes = QueryBuilder::for(JobType::class)
            ->paginate(10);
        return DataResource::collection($jobtypes);
    }


    /**
     * Show the specified resource.
     * @param JobType $id
     * @return DataResource
     */
    public function show(JobType $id): DataResource
    {
        JobType::whereId($id->id)->firstOrFail();
        return new DataResource($id);
    }

}
