<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar443855838;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar443855838.index');
    }

    public function create()
    {
        return view('admin.testcar443855838.create');
    }

    public function edit(TestCar443855838 $testCar443855838)
    {
        return view('admin.testcar443855838.edit', compact('testCar443855838'));
    }

    public function show(TestCar443855838 $testCar443855838)
    {
        return view('admin.testcar443855838.show', compact('testCar443855838'));
    }
}
