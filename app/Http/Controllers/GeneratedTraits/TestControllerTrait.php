<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1498677870;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1498677870.index');
    }

    public function create()
    {
        return view('admin.testcar1498677870.create');
    }

    public function edit(TestCar1498677870 $testCar1498677870)
    {
        return view('admin.testcar1498677870.edit', compact('testCar1498677870'));
    }

    public function show(TestCar1498677870 $testCar1498677870)
    {
        return view('admin.testcar1498677870.show', compact('testCar1498677870'));
    }
}
