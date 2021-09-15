<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Vacancy\VacancyUpdateRequest;
use Modules\Core\Entities\Vacancy;
use Spatie\QueryBuilder\QueryBuilder;

class VacancyController extends Controller
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
        $vacancies = QueryBuilder::for(Vacancy::class)
            ->allowedFilters(['category.name', 'district.name', 'city.name', 'jobs.name'])
            ->with(['category', 'district', 'cities', 'jobs', 'files'])
            ->where('is_approved', 1)
            ->paginate(10);
        return DataResource::collection($vacancies);
    }


    /**
     * Show the specified resource.
     * @param Vacancy $id
     * @return DataResource
     */
    public function show(Vacancy $id): DataResource
    {
        $vacancy = Vacancy::whereId($id->id)
            ->with(['category', 'district', 'cities', 'jobs', 'files'])
            ->firstOrFail();
        return new DataResource($vacancy);
    }


    public function indexPending(): AnonymousResourceCollection
    {
        $vacancies = QueryBuilder::for(Vacancy::class)
            ->allowedFilters(['category.name', 'district.name', 'city.name', 'jobs.name'])
            ->with(['category', 'district', 'cities', 'jobs', 'files'])
            ->where('is_approved', 0)
            ->paginate(10);
        return DataResource::collection($vacancies);
    }


    /**
     * Update the specified resource in storage.
     * @param VacancyUpdateRequest $request
     * @param Vacancy $id
     * @return DataResource
     */
    public function update(VacancyUpdateRequest $request, Vacancy $id): DataResource
    {
        $id->update($request->validated());
        return new DataResource($id);
    }


    /**
     * Remove the specified resource from storage.
     * @param Vacancy $vacancy
     * @return DataResource
     */
    public function destroy(Vacancy $vacancy): DataResource
    {
        $vacancy->delete();
        return new DataResource($vacancy);
    }
}
