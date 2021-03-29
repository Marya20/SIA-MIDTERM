<?php

namespace App\Http\Controllers;
use App\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index()
    {
        return Insurance::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
            
        ]);

        return Insurance::create($request->all());
    }

    public function show(Insurance $insurance)
    {
        return Insurance::with('children')->where('insurances.id', $insurance->id)->get();
    }

    public function update(Request $request, Insurance $insurance)
    {
        $insurance = Insurance::find($insurance->id);
        $insurance->update($request->all());
        return $insurance;
    }

    public function destroy(Insurance $insurance)
    {
        return Insurance::destroy($insurance->id);
    }
}