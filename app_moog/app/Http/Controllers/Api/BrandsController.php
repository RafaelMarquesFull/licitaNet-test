<?php

namespace App\Http\Controllers\Api;

use App\DTO\CreateBrandsDTO;
use App\DTO\UpdateBrandsDTO;
use App\Http\Requests\BrandsCreateRequest;
use App\Http\Requests\BrandsUpdateRequest;
use App\Services\BrandsService;
use Illuminate\Http\Request;

class BrandsController extends ApiController
{
    protected BrandsService $service;

    public function __construct(BrandsService $service)
    {
        $this->service = $service;
        // $this->upload = $upload;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $brands = $this->service->getAll($request->filter);

        return $brands;
    }
    public function show(string $id)
    {
        $brands = $this->service->findOne($id);

        return $brands;
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandsCreateRequest $request)
    {
        $brands = $this->service->new(CreateBrandsDTO::makeFromRequest($request));

        return $brands;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(BrandsUpdateRequest $request, $id )
    {
        $request['code_brand'] = $id;
        $response = $this->service->update(UpdateBrandsDTO::makeFromRequest($request));
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $response = $this->service->delete($id);
        
        return $response;
    }
}
