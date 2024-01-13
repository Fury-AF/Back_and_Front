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
        $investment = new Investment();
        $investment->investor_id = $request->input('investor_id');
        $investment->investment_name = $request->input('investment_name');
        $investment->amount = $request->input('amount');
        $investment->save();
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
        $investment = Investment::findOrFail($id);
        $investment->investor_id = $request->input('investor_id');
        $investment->investment_name = $request->input('investment_name');
        $investment->amount = $request->input('amount');
        $investment->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $investment = Investment::findOrFail($id)->delete();
    }

}
