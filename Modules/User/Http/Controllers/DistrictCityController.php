<?php

namespace Modules\User\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\DistrictCity;
use Modules\Core\Entities\District;
use Spatie\QueryBuilder\QueryBuilder;

class DistrictCityController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param District $district
     * @return AnonymousResourceCollection
     */
    public function index(District $district) :AnonymousResourceCollection
    {
        $cities = QueryBuilder::for($district->cities())
            ->paginate(50);
        return DataResource::collection($cities);
    }


    /**
     * Show the specified resource.
     * @param DistrictCity $city
     *
     * @return DataResource
     */
    public function show(DistrictCity $city) : DataResource
    {
        DistrictCity::whereId($city->id)->firstOrFail();
        return new DataResource($city);
    }


}
