<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1319824640;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1319824640.index');
    }

    public function create()
    {
        return view('admin.testcar1319824640.create');
    }

    public function edit(TestCar1319824640 $testCar1319824640)
    {
        return view('admin.testcar1319824640.edit', compact('testCar1319824640'));
    }

    public function show(TestCar1319824640 $testCar1319824640)
    {
        return view('admin.testcar1319824640.show', compact('testCar1319824640'));
    }
}
