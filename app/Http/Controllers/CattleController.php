<?php

namespace App\Http\Controllers;

use App\Models\Cattle;
use App\Models\CattleCategory;
use Illuminate\Http\Request;

class CattleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filters = $request->only(['type', 'gender', 'breed', 'subsection']);
        return inertia("Cattle/Index", [
            'type' => CattleCategory::find(1)->cattleSubCategory,
            'gender' => CattleCategory::find(2)->cattleSubCategory,
            'breed' => CattleCategory::find(3)->cattleSubCategory,
            'subsection' => CattleCategory::find(4)->cattleSubCategory,
            'filters' => $filters,
            'cattles' => Cattle::MostRecent()->filter($filters)->AllRelation()->paginate(10)->withQueryString()
        ]);
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
