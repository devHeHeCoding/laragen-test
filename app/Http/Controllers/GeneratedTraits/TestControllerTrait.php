<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2085255194;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2085255194.index');
    }

    public function create()
    {
        return view('admin.testcar2085255194.create');
    }

    public function edit(TestCar2085255194 $testCar2085255194)
    {
        return view('admin.testcar2085255194.edit', compact('testCar2085255194'));
    }

    public function show(TestCar2085255194 $testCar2085255194)
    {
        return view('admin.testcar2085255194.show', compact('testCar2085255194'));
    }
}
