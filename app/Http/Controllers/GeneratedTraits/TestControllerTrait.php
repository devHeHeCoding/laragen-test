<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar132168106;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar132168106.index');
    }

    public function create()
    {
        return view('admin.testcar132168106.create');
    }

    public function edit(TestCar132168106 $testCar132168106)
    {
        return view('admin.testcar132168106.edit', compact('testCar132168106'));
    }

    public function show(TestCar132168106 $testCar132168106)
    {
        return view('admin.testcar132168106.show', compact('testCar132168106'));
    }
}
