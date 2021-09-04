<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Core\Entities\Customer;
use Modules\Core\Http\Requests\CustomerStoreRequest;
use Modules\Core\Transformers\CustomerResource;
use Modules\Core\Transformers\CustomerResourceCollection;

class CustomerController extends Controller
{

    /**
     * @return CustomerResourceCollection
     */

    public function index(): CustomerResourceCollection
    {
        return CustomerResourceCollection::make(Customer::paginate(10));
    }

    /**
     * @param CustomerResource $request
     * @return mixed
     */

    public function store(CustomerResource $request)
    {
        return Customer::create($request->validated());
    }


    /**
     * @param $id
     * @return CustomerResource
     */
    public function show($id): CustomerResource
    {
        return CustomerResource::make(Customer::findOrFail($id));
    }


    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        return Customer::findOrFail($id)->update($request->validated());
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return Customer::findOrFail($id)->delete();
    }
}
