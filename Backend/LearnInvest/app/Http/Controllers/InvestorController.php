<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index()
    {
        return Investor::with('investments:id,investor_id')->get();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $airline = new Investor();
        $airline->name = $request->input('name');
        $airline->email = $request->input('email');
        $airline->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Investor::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $airline = Investor::findOrFail($id);
        $airline->investor_id = $request->input('investor_id');
        $airline->name = $request->input('email');
        $airline->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $airline = Investor::findOrFail($id)->delete();
    }}
