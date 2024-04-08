<?php

namespace App\Http\Controllers\Api;

use App\DTO\CreateProductsDTO;
use App\DTO\UpdateProductsDTO;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
// use App\Repositories\ImageUploadControllerInterface;
use App\Services\ProductService;
use Illuminate\Http\Request;
use stdClass;

class ProductsController extends ApiController
{
    protected ProductService $service;
    // protected ImageUploadControllerInterface $upload;

    public function __construct(ProductService $service, )
    {
        //ImageUploadControllerInterface $upload,
        $this->service = $service;
        // $this->upload = $upload;
    }
   
    public function index(Request $request)
    {
        $products = $this->service->getAll($request->filter);

        return $products;
    }
    public function show(string $id)
    {
        $product = $this->service->findOne($id);

        return $product;
    }
 

    public function store(ProductCreateRequest $request)
    {

        // if($images = $request->images){
        //     $imagepath = $this->upload->uploadAndCropImage($images);
        //     $request['images'] = $imagepath;
        // }
        $product = $this->service->new(CreateProductsDTO::makeFromRequest($request));
        // dd($product);
        return $product;
    }

   
    public function update(ProductUpdateRequest $request, $id)
    {
        $request['code_product'] = $id;
        $product = $this->service->update(UpdateProductsDTO::makeFromRequest($request));
        if(!$product){
            return json_encode("Falha ao atualizar produto!");
        }
        return $product;
       
    }


    public function destroy(string $id)
    {
        $this->service->delete($id);

    }
}
