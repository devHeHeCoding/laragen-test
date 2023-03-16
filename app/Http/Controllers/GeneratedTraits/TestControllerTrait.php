<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar940083059;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar940083059.index');
    }

    public function create()
    {
        return view('admin.testcar940083059.create');
    }

    public function edit(TestCar940083059 $testCar940083059)
    {
        return view('admin.testcar940083059.edit', compact('testCar940083059'));
    }

    public function show(TestCar940083059 $testCar940083059)
    {
        return view('admin.testcar940083059.show', compact('testCar940083059'));
    }
}
