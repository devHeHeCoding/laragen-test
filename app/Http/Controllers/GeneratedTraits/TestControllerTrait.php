<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1376818695;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1376818695.index');
    }

    public function create()
    {
        return view('admin.testcar1376818695.create');
    }

    public function edit(TestCar1376818695 $testCar1376818695)
    {
        return view('admin.testcar1376818695.edit', compact('testCar1376818695'));
    }

    public function show(TestCar1376818695 $testCar1376818695)
    {
        return view('admin.testcar1376818695.show', compact('testCar1376818695'));
    }
}
