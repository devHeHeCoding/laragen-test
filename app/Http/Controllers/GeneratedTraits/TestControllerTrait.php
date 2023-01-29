<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar972647089;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar972647089.index');
    }

    public function create()
    {
        return view('admin.testcar972647089.create');
    }

    public function edit(TestCar972647089 $testCar972647089)
    {
        return view('admin.testcar972647089.edit', compact('testCar972647089'));
    }

    public function show(TestCar972647089 $testCar972647089)
    {
        return view('admin.testcar972647089.show', compact('testCar972647089'));
    }
}
