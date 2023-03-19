<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar723896777;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar723896777.index');
    }

    public function create()
    {
        return view('admin.testcar723896777.create');
    }

    public function edit(TestCar723896777 $testCar723896777)
    {
        return view('admin.testcar723896777.edit', compact('testCar723896777'));
    }

    public function show(TestCar723896777 $testCar723896777)
    {
        return view('admin.testcar723896777.show', compact('testCar723896777'));
    }
}
