<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1910293284;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1910293284.index');
    }

    public function create()
    {
        return view('admin.testcar1910293284.create');
    }

    public function edit(TestCar1910293284 $testCar1910293284)
    {
        return view('admin.testcar1910293284.edit', compact('testCar1910293284'));
    }

    public function show(TestCar1910293284 $testCar1910293284)
    {
        return view('admin.testcar1910293284.show', compact('testCar1910293284'));
    }
}
