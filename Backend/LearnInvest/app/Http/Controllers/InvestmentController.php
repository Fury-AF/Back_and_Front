<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index()
    {
        return Investment::with('Investment:id, investment_name,amount')->get();
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $airline = new Investment();
        $airline->investor_id = $request->input('investor_id');
        $airline->investment_name = $request->input('investment_name');
        $airline->amount = $request->input('amount');
        $airline->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Investment::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $airline = Investment::findOrFail($id);
        $airline->investor_id = $request->input('investor_id');
        $airline->investment_name = $request->input('investment_name');
        $airline->amount = $request->input('amount');
        $airline->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $airline = Investment::findOrFail($id)->delete();
    }

}
