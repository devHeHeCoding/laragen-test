<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1285989710;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1285989710.index');
    }

    public function create()
    {
        return view('admin.testcar1285989710.create');
    }

    public function edit(TestCar1285989710 $testCar1285989710)
    {
        return view('admin.testcar1285989710.edit', compact('testCar1285989710'));
    }

    public function show(TestCar1285989710 $testCar1285989710)
    {
        return view('admin.testcar1285989710.show', compact('testCar1285989710'));
    }
}
