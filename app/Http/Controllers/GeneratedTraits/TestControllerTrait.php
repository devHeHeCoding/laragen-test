<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar196262789;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar196262789.index');
    }

    public function create()
    {
        return view('admin.testcar196262789.create');
    }

    public function edit(TestCar196262789 $testCar196262789)
    {
        return view('admin.testcar196262789.edit', compact('testCar196262789'));
    }

    public function show(TestCar196262789 $testCar196262789)
    {
        return view('admin.testcar196262789.show', compact('testCar196262789'));
    }
}
