<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Api\LocationsController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{   
    protected LocationsController $locations;
    public function __construct( LocationsController $locations){
        $this->locations = $locations;
    }
    public function index(Request $request)
    {
        $locations = $this->locations->index($request);

        return Inertia::render('Panel/Dashboard', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
