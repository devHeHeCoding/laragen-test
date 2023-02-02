<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1026629644;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1026629644.index');
    }

    public function create()
    {
        return view('admin.testcar1026629644.create');
    }

    public function edit(TestCar1026629644 $testCar1026629644)
    {
        return view('admin.testcar1026629644.edit', compact('testCar1026629644'));
    }

    public function show(TestCar1026629644 $testCar1026629644)
    {
        return view('admin.testcar1026629644.show', compact('testCar1026629644'));
    }
}
