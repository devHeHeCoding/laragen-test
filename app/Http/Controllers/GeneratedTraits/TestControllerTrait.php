<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1513758171;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1513758171.index');
    }

    public function create()
    {
        return view('admin.testcar1513758171.create');
    }

    public function edit(TestCar1513758171 $testCar1513758171)
    {
        return view('admin.testcar1513758171.edit', compact('testCar1513758171'));
    }

    public function show(TestCar1513758171 $testCar1513758171)
    {
        return view('admin.testcar1513758171.show', compact('testCar1513758171'));
    }
}
