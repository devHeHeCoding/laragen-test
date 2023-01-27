<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar50840283;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar50840283.index');
    }

    public function create()
    {
        return view('admin.testcar50840283.create');
    }

    public function edit(TestCar50840283 $testCar50840283)
    {
        return view('admin.testcar50840283.edit', compact('testCar50840283'));
    }

    public function show(TestCar50840283 $testCar50840283)
    {
        return view('admin.testcar50840283.show', compact('testCar50840283'));
    }
}
