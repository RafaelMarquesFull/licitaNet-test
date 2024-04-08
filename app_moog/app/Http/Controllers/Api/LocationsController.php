<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\LocationService;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function __construct(
        protected LocationService $location 
    ){}
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $locations = $this->location->getAll($request->filter);

        if(!$locations){
            return 'SEM CIDADES NO MOMENTO';
        } 

        return $locations;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
