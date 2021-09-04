<?php

namespace Modules\User\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\DistrictCity;
use Spatie\QueryBuilder\QueryBuilder;

class DistrictCityController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): AnonymousResourceCollection
    {
        $district_cities = QueryBuilder::for(DistrictCity::class)
            ->paginate(30);
        return DataResource::collection($district_cities);
    }


    /**
     * Show the specified resource.
     * @param DistrictCity $id
     * @return DataResource
     */
    public function show(DistrictCity $id): DataResource
    {
        DistrictCity::whereId($id->id)->firstOrFail();
        return new DataResource($id);
    }


}
