<?php

namespace Modules\Employeer\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\Vacancy;
use Modules\Employeer\Http\Requests\vacancy\vacancyCreateRequest;
use Modules\Employeer\Http\Requests\vacancy\vacancyUpdateRequest;
use Spatie\QueryBuilder\QueryBuilder;

class VacancyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('employee.check');
    }

    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $vacancies = QueryBuilder::for(Vacancy::class)
            ->with(['category', 'district', 'cities', 'jobs', 'files'])
            ->paginate(100);
        return DataResource::collection($vacancies);
    }


    /**
     * Store a newly created resource in storage.
     * @param vacancyCreateRequest $request
     * @return DataResource
     */
    public function store(vacancyCreateRequest $request): DataResource
    {
        $id = Vacancy::create($request->validated());
        return new DataResource($id);
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

    /**
     * Update the specified resource in storage.
     * @param VacancyUpdateRequest $request
     * @param Vacancy $id
     * @return DataResource
     */
    public function update(vacancyUpdateRequest $request, Vacancy $vacancy): DataResource
    {
        $vacancy->update($request->validated());
        return new DataResource($vacancy);
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
