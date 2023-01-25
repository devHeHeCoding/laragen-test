<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar164808530;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar164808530.index');
    }

    public function create()
    {
        return view('admin.testcar164808530.create');
    }

    public function edit(TestCar164808530 $testCar164808530)
    {
        return view('admin.testcar164808530.edit', compact('testCar164808530'));
    }

    public function show(TestCar164808530 $testCar164808530)
    {
        return view('admin.testcar164808530.show', compact('testCar164808530'));
    }
}
