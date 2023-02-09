<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar572401614;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar572401614.index');
    }

    public function create()
    {
        return view('admin.testcar572401614.create');
    }

    public function edit(TestCar572401614 $testCar572401614)
    {
        return view('admin.testcar572401614.edit', compact('testCar572401614'));
    }

    public function show(TestCar572401614 $testCar572401614)
    {
        return view('admin.testcar572401614.show', compact('testCar572401614'));
    }
}
