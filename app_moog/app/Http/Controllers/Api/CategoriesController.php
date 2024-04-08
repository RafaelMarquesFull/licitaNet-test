<?php

namespace App\Http\Controllers\Api;

use App\DTO\CreateCategoriesDTO;
use App\DTO\UpdateCategoriesDTO;
use App\Http\Requests\CategoriesCreateRequest;
use App\Http\Requests\CategoriestUpdateRequest;
use App\Services\CategoriesService;
use Illuminate\Http\Request;

class CategoriesController extends ApiController
{
    protected CategoriesService $service;

    public function __construct(CategoriesService $service)
    {
        $this->service = $service;
        // $this->upload = $upload;
    }
    public function index(Request $request)
    {
        $category = $this->service->getAll($request->filter);

        return $category;
    }
    public function show(string $id)
    {
        $category = $this->service->findOne($id);

        return $category;
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesCreateRequest $request)
    {
        $category = $this->service->new(CreateCategoriesDTO::makeFromRequest($request));

        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriestUpdateRequest $request, $id )
    {
        $request['code_category'] = $id;
        $response = $this->service->update(UpdateCategoriesDTO::makeFromRequest($request));
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
