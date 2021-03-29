<?php

namespace App\Http\Controllers;
use App\Children;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function index()
    {
        return Children::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id'   => 'required',
            'lname'         => 'required',
            'fname'         => 'required',
            'insurance_id'  => 'required'
            
        ]);
        return Children::create($request->all());
    }

    public function show(Children $children)
    {
        return Children::with('insurance', 'employee')->where('childrens.id', $children->id)->get();
    }

    public function update(Request $request, Children $children)
    {
        $children = Children::find($children->id);
        $children->update($request->all());
        return $children;
    }

    public function destroy(Children $children)
    {
        return Children::destroy($children->id);
    }
}
