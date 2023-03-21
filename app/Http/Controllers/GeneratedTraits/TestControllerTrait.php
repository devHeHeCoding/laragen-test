<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1400970972;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1400970972.index');
    }

    public function create()
    {
        return view('admin.testcar1400970972.create');
    }

    public function edit(TestCar1400970972 $testCar1400970972)
    {
        return view('admin.testcar1400970972.edit', compact('testCar1400970972'));
    }

    public function show(TestCar1400970972 $testCar1400970972)
    {
        return view('admin.testcar1400970972.show', compact('testCar1400970972'));
    }
}
