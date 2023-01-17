<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar553353942;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar553353942.index');
    }

    public function create()
    {
        return view('admin.testcar553353942.create');
    }

    public function edit(TestCar553353942 $testcar553353942)
    {
        return view('admin.testcar553353942.edit', compact('testcar553353942'));
    }

    public function show(TestCar553353942 $testcar553353942)
    {
        return view('admin.testcar553353942.show', compact('testcar553353942'));
    }
}
