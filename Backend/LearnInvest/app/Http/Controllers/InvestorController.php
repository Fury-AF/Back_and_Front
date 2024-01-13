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
        $investor = new Investor();
        $investor->name = $request->input('name');
        $investor->email = $request->input('email');
        $investor->save();
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
        $investor = Investor::findOrFail($id);
        $investor->investor_id = $request->input('investor_id');
        $investor->name = $request->input('email');
        $investor->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $investor = Investor::findOrFail($id)->delete();
    }}
