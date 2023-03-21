<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar689738376;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar689738376.index');
    }

    public function create()
    {
        return view('admin.testcar689738376.create');
    }

    public function edit(TestCar689738376 $testCar689738376)
    {
        return view('admin.testcar689738376.edit', compact('testCar689738376'));
    }

    public function show(TestCar689738376 $testCar689738376)
    {
        return view('admin.testcar689738376.show', compact('testCar689738376'));
    }
}
