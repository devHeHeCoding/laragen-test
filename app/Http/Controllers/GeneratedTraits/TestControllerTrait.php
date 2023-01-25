<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1868919811;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1868919811.index');
    }

    public function create()
    {
        return view('admin.testcar1868919811.create');
    }

    public function edit(TestCar1868919811 $testCar1868919811)
    {
        return view('admin.testcar1868919811.edit', compact('testCar1868919811'));
    }

    public function show(TestCar1868919811 $testCar1868919811)
    {
        return view('admin.testcar1868919811.show', compact('testCar1868919811'));
    }
}
