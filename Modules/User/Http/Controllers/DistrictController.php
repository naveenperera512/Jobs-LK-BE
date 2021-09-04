<?php

namespace Modules\User\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\District;
use Spatie\QueryBuilder\QueryBuilder;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): AnonymousResourceCollection
    {
        $districts = QueryBuilder::for(District::class)
            ->paginate(30);
        return DataResource::collection($districts);
    }


    /**
     * Show the specified resource.
     * @param District $id
     * @return DataResource
     */
    public function show(District $id): DataResource
    {
        District::whereId($id->id)->firstOrFail();
        return new DataResource($id);
    }


}
