<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar908077359;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar908077359.index');
    }

    public function create()
    {
        return view('admin.testcar908077359.create');
    }

    public function edit(TestCar908077359 $testCar908077359)
    {
        return view('admin.testcar908077359.edit', compact('testCar908077359'));
    }

    public function show(TestCar908077359 $testCar908077359)
    {
        return view('admin.testcar908077359.show', compact('testCar908077359'));
    }
}
