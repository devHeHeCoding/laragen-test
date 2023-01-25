<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1472809731;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1472809731.index');
    }

    public function create()
    {
        return view('admin.testcar1472809731.create');
    }

    public function edit(TestCar1472809731 $testCar1472809731)
    {
        return view('admin.testcar1472809731.edit', compact('testCar1472809731'));
    }

    public function show(TestCar1472809731 $testCar1472809731)
    {
        return view('admin.testcar1472809731.show', compact('testCar1472809731'));
    }
}
