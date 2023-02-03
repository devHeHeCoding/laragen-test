<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1896063117;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1896063117.index');
    }

    public function create()
    {
        return view('admin.testcar1896063117.create');
    }

    public function edit(TestCar1896063117 $testCar1896063117)
    {
        return view('admin.testcar1896063117.edit', compact('testCar1896063117'));
    }

    public function show(TestCar1896063117 $testCar1896063117)
    {
        return view('admin.testcar1896063117.show', compact('testCar1896063117'));
    }
}
