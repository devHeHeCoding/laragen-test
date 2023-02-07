<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar861605239;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar861605239.index');
    }

    public function create()
    {
        return view('admin.testcar861605239.create');
    }

    public function edit(TestCar861605239 $testCar861605239)
    {
        return view('admin.testcar861605239.edit', compact('testCar861605239'));
    }

    public function show(TestCar861605239 $testCar861605239)
    {
        return view('admin.testcar861605239.show', compact('testCar861605239'));
    }
}
