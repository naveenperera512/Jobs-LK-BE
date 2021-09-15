<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Category\CategoryCreateRequest;
use Modules\Admin\Http\Requests\JobType\JobTypeCreateRequest;
use Modules\Admin\Http\Requests\JobType\JobTypeUpdateRequest;
use Modules\Core\Entities\JobType;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;

class JobTypeController extends Controller
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
        $jobtypes = QueryBuilder::for(JobType::class)
            ->paginate(100);
        return DataResource::collection($jobtypes);
    }


    /**
     * Show the specified resource.
     * @param JobType $jobType
     * @return DataResource
     */
    public function show(JobType $jobType): DataResource
    {
        JobType::whereId($jobType->id)->firstOrFail();
        return new DataResource($jobType);
    }

    /**
     * Store a newly created resource in storage.
     * @param JobTypeCreateRequest $request
     * @return DataResource
     */
    public function store(JobTypeCreateRequest $request): DataResource
    {
        $category = JobType::create($request->validated());
        return new DataResource($category);
    }

    /**
     * Update the specified resource in storage.
     * @param JobTypeUpdateRequest $request
     * @param JobType $jobType
     * @return DataResource
     */
    public function update(JobTypeUpdateRequest $request, JobType $jobType)
    {
        $jobType->update($request->validated());
        return new DataResource($jobType);
    }

    /**
     * Remove the specified resource from storage.
     * @param JobType $jobType
     * @return DataResource
     */
    public function destroy(JobType $jobType): DataResource
    {
        $jobType->delete();
        return new DataResource($jobType);
    }
}
