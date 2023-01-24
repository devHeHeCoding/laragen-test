<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1485979483;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1485979483.index');
    }

    public function create()
    {
        return view('admin.testcar1485979483.create');
    }

    public function edit(TestCar1485979483 $testCar1485979483)
    {
        return view('admin.testcar1485979483.edit', compact('testCar1485979483'));
    }

    public function show(TestCar1485979483 $testCar1485979483)
    {
        return view('admin.testcar1485979483.show', compact('testCar1485979483'));
    }
}
