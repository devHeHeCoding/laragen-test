<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1844893232;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1844893232.index');
    }

    public function create()
    {
        return view('admin.testcar1844893232.create');
    }

    public function edit(TestCar1844893232 $testCar1844893232)
    {
        return view('admin.testcar1844893232.edit', compact('testCar1844893232'));
    }

    public function show(TestCar1844893232 $testCar1844893232)
    {
        return view('admin.testcar1844893232.show', compact('testCar1844893232'));
    }
}
