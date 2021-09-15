<?php

namespace Modules\User\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\Vacancy;
use Spatie\QueryBuilder\QueryBuilder;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $vacancies = QueryBuilder::for(Vacancy::class)
            ->when(request('category_id','')!= '', function ($query){$query->where('category_id',request('category_id'));})
            ->when(request('job_type_id','')!= '', function ($query){$query->where('job_type_id',request('job_type_id'));})
            ->when(request('district_id','')!= '', function ($query){$query->where('district_id',request('district_id'));})
            ->with(['category', 'district', 'cities', 'jobs', 'files'])
            ->orderBy('id', 'desc')
            ->where( 'is_approved', 1)
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
}
