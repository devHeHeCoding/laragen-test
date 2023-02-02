<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1629897200;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1629897200.index');
    }

    public function create()
    {
        return view('admin.testcar1629897200.create');
    }

    public function edit(TestCar1629897200 $testCar1629897200)
    {
        return view('admin.testcar1629897200.edit', compact('testCar1629897200'));
    }

    public function show(TestCar1629897200 $testCar1629897200)
    {
        return view('admin.testcar1629897200.show', compact('testCar1629897200'));
    }
}
