<?php

namespace Modules\Admin\Http\Controllers;


use App\Http\Resources\DataResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Category\CategoryCreateRequest;
use Modules\Admin\Http\Requests\Category\CategoryUpdateRequest;
use Modules\Core\Entities\Category;
use Spatie\QueryBuilder\QueryBuilder;

class CategoryController extends Controller
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
        $categories = QueryBuilder::for(Category::class)
            ->paginate(10);
        return DataResource::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     * @param CategoryCreateRequest $request
     * @return DataResource
     */
    public function store(CategoryCreateRequest $request): DataResource
    {
        $category = Category::create($request->validated());
        return new DataResource($category);
    }

    /**
     * Show the specified resource.
     * @param Category $category
     * @return DataResource
     */
    public function show(Category $category): DataResource
    {
        Category::whereId($category->id)->firstOrFail();
        return new DataResource($category);
    }


    /**
     * Update the specified resource in storage.
     * @param CategoryUpdateRequest $request
     * @param Category $category
     * @return DataResource
     */
    public function update(CategoryUpdateRequest $request, Category $category): DataResource
    {
        $category->update($request->validated());
        return new DataResource($category);

    }

    /**
     * Remove the specified resource from storage.
     * @param Category $category
     * @return DataResource
     */
    public function destroy(Category $category): DataResource
    {
        $category->delete();
        return new DataResource($category);
    }
}
