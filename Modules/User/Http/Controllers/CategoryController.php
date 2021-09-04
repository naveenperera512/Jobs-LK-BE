<?php

namespace Modules\User\Http\Controllers;

use App\Http\Resources\DataResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\Category;
use Spatie\QueryBuilder\QueryBuilder;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $categories = QueryBuilder::for(Category::class)
            ->paginate(10);
        return DataResource::collection($categories);
    }


    /**
     * Show the specified resource.
     * @param Category $id
     * @return DataResource
     */
    public function show(Category $id): DataResource
    {
        Category::whereId($id->id)->firstOrFail();
        return new DataResource($id);
    }

}
