<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1299909494;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1299909494.index');
    }

    public function create()
    {
        return view('admin.testcar1299909494.create');
    }

    public function edit(TestCar1299909494 $testCar1299909494)
    {
        return view('admin.testcar1299909494.edit', compact('testCar1299909494'));
    }

    public function show(TestCar1299909494 $testCar1299909494)
    {
        return view('admin.testcar1299909494.show', compact('testCar1299909494'));
    }
}
