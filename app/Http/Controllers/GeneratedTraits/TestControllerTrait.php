<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar68996410;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar68996410.index');
    }

    public function create()
    {
        return view('admin.testcar68996410.create');
    }

    public function edit(TestCar68996410 $testCar68996410)
    {
        return view('admin.testcar68996410.edit', compact('testCar68996410'));
    }

    public function show(TestCar68996410 $testCar68996410)
    {
        return view('admin.testcar68996410.show', compact('testCar68996410'));
    }
}
