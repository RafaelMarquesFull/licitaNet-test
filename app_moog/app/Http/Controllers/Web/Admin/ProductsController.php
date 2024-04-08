<?php

namespace App\Http\Controllers\Web\Admin;

use App\DTO\CreateProductsDTO;
use App\DTO\UpdateProductsDTO;
use App\Http\Controllers\Api\LocationsController;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\products;
use App\Repositories\ImagesRepositoryInterface;
use App\Services\BrandsService;
use App\Services\CategoriesService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use Inertia\Inertia;
use stdClass;

class ProductsController extends Controller
{
    protected ProductService $service;

    protected BrandsService $brands;
    protected CategoriesService $categories;
    protected  ImagesRepositoryInterface $upload;
    protected LocationsController $locations;

    public function __construct(ProductService $service,  ImagesRepositoryInterface $upload, LocationsController $locations, BrandsService $brands,  CategoriesService $categories)  
    {
        //,
        $this->service = $service;

        $this->upload = $upload;

        $this->locations = $locations;

        $this->brands = $brands;

        $this->categories = $categories;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $products = $this->service->getAll($request->filter);
        $locations = $this->locations->index($request);

        return Inertia::render('Panel/Products', compact('products', 'locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $locations = $this->locations->index($request);
        $brands = $this->brands->getAll($request->filter);
        $categories = $this->categories->getAll($request->filter);
        // dd($brands);
        return Inertia::render('Panel/AddProducts', compact('locations', 'brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
       
        $validatedData = ProductCreateRequest::capture();
        
        if ($images = $request->file('images')) {
            $imagePath = $this->upload->uploadAndCropImage($images);
            $validatedData['images'] = $imagePath;
        }
   
        $validatedData['slug']= Str::slug($validatedData['name']);
        $this->service->new(CreateProductsDTO::makeFromRequest($validatedData));
        
        return Inertia::location(route('products'));
    }
    

    /**
     * Display the specified resource.
     */
    public function show(products $products, string $id)
    {
        
        if(!$products = $this->service->findOne($id)){
            return back();
        }

        return Inertia::render('Panel/SigleProducts', compact($products));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $products, Request $request , string $id)
    {
        if(!$products = $this->service->findOne($id)){
            return back();
        }
        $locations = $this->locations->index($request);
        $brands = $this->brands->getAll($request->filter);
        $categories = $this->categories->getAll($request->filter);
        
        return Inertia::render('Panel/EditProduct', compact('products', 'locations', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $validatedData = ProductUpdateRequest::capture();
        
        dd( $request->all());
        if ($images = $request->file('images')) {
            $this->upload->deleteImageIfUploaded($request->code_product);
            $imagePath = $this->upload->uploadAndCropImage($images);
            $validatedData['images'] = $imagePath;
        }
        $validatedData['slug']= Str::slug($validatedData['name']);
        $product = $this->service->update(UpdateProductsDTO::makeFromRequest($validatedData));
        if(!$product){
            return back();
        }
        return redirect()->route('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!$products = $this->service->delete($id)){
            return back();
        }
        return redirect()->route('/products');
    }
}
