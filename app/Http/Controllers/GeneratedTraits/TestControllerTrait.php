<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar266619430;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar266619430.index');
    }

    public function create()
    {
        return view('admin.testcar266619430.create');
    }

    public function edit(TestCar266619430 $testCar266619430)
    {
        return view('admin.testcar266619430.edit', compact('testCar266619430'));
    }

    public function show(TestCar266619430 $testCar266619430)
    {
        return view('admin.testcar266619430.show', compact('testCar266619430'));
    }
}
